<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Mapper;

use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PhoneNumberInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\RecordInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\AdrItemType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\GeoItemType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\NameItemType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\RufnrType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\ModuleCodesType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\OutRecordWSType;
use PostDirekt\Sdk\AddressfactoryDirect\Service\AddressVerificationService\GeoData;
use PostDirekt\Sdk\AddressfactoryDirect\Service\AddressVerificationService\GeoDataGk;
use PostDirekt\Sdk\AddressfactoryDirect\Service\AddressVerificationService\GeoDataUtm;
use PostDirekt\Sdk\AddressfactoryDirect\Service\AddressVerificationService\Person;
use PostDirekt\Sdk\AddressfactoryDirect\Service\AddressVerificationService\PhoneNumber;
use PostDirekt\Sdk\AddressfactoryDirect\Service\AddressVerificationService\Record;
use PostDirekt\Sdk\AddressfactoryDirect\Service\AddressVerificationService\RoutingData;

class RecordResponseMapper
{
    private readonly AddressItemMapper $addressItemMapper;

    public function __construct()
    {
        $this->addressItemMapper = new AddressItemMapper();
    }

    public function map(OutRecordWSType $outRecord): RecordInterface
    {
        $person =
        $address =
        $coords =
        $utm =
        $gk =
        $routingData =
        $parcelStation =
        $postOffice =
        $postalBox =
        $bulkReceiver = null;

        // Person
        if ($outRecord->getNameItem() !== null) {
            /** @var NameItemType $name */
            $name = $outRecord->getNameItem();
            $company = [
                $name->getFirma1(),
                $name->getFirma2(),
                $name->getFirma3(),
            ];

            $person = new Person(
                $name->getAnrede(),
                $name->getVorname(),
                $name->getName(),
                array_filter($company),
                $name->getVorsatzwort(),
                $name->getNamenszusatz(),
                $name->getTitel(),
                $name->getAdel(),
                $name->getGeschlecht(),
                $name->getPsPostNr()
            );
        }

        // Address data
        if (($adrItem = $outRecord->getAdrItem()) !== null) {
            $address = $this->addressItemMapper->mapAddress($adrItem, $outRecord->getNameItem());
            $parcelStation = $this->addressItemMapper->mapParcelStation($adrItem);
            $postOffice = $this->addressItemMapper->mapPostOffice($adrItem);
            $postalBox = $this->addressItemMapper->mapPostalBox($adrItem);
            $bulkReceiver = $this->addressItemMapper->mapBulkReceiver($adrItem);
            $routingData = $this->extractRoutingData($adrItem);
        }

        // Geo Data
        if ($outRecord->getGeoItem() !== null) {
            /** @var GeoItemType $geo */
            $geo = $outRecord->getGeoItem();
            if ($geo->getKoordWgs84() !== null) {
                $coords = new GeoData($geo->getKoordWgs84()->getLaenge(), $geo->getKoordWgs84()->getBreite());
            }

            if ($geo->getUtmWgs84() !== null) {
                $utm = new GeoDataUtm($geo->getUtmWgs84()->getNord(), $geo->getUtmWgs84()->getOst());
            }

            if ($geo->getGkbDhdn() !== null) {
                $gk = new GeoDataGk($geo->getGkbDhdn()->getHochwert(), $geo->getGkbDhdn()->getRechtswert());
            }
        }
        $phoneNumbers = $this->mapPhoneNumbers($outRecord);

        // Status Codes
        $statusCodes = array_reduce(
            $outRecord->getStatusItem()->getPDStatusCodeItem()->getModuleCodes(),
            fn(array $codes, ModuleCodesType $moduleCodes) => array_merge($codes, $moduleCodes->getStatusCode()),
            []
        );

        return new Record(
            $outRecord->getRecordId(),
            $person,
            $address,
            $parcelStation,
            $postOffice,
            $postalBox,
            $bulkReceiver,
            $coords,
            $utm,
            $gk,
            $routingData,
            $phoneNumbers,
            $statusCodes
        );
    }

    private function extractRoutingData(
        AdrItemType $adrItem
    ): ?RoutingData {
        $routingData = $routing = null;
        if ($adrItem->getPackstation() !== null) {
            $routing = $adrItem->getPackstation()->getLeitdaten();
        }

        if ($adrItem->getPostfiliale() !== null) {
            $routing = $adrItem->getPostfiliale()->getLeitdaten();
        }

        if ($adrItem->getPostfach() !== null) {
            $routing = $adrItem->getPostfach()->getLeitdaten();
        }

        if ($adrItem->getGE() !== null) {
            $routing = $adrItem->getGE()->getLeitdaten();
        }
        if ($routing !== null) {
            $routingData = new RoutingData(
                $routing->getLeitcode(),
                $routing->getAlort(),
                $routing->getFrachtzentrum(),
                $routing->getStrSchluessel(),
                $routing->getKgs()
            );
        }

        return $routingData;
    }

    /**
     * @return PhoneNumber[]
     */
    private function mapPhoneNumbers(OutRecordWSType $outRecord): array
    {
        $phoneNumbers = [];
        // Phone Numbers
        if ($outRecord->getRufnrItem() !== null) {
            $map = [
                'Unbekannt' => PhoneNumberInterface::TYPE_UNKNOWN,
                'Privat' => PhoneNumberInterface::TYPE_PRIVATE,
                'Geschaeftlich' => PhoneNumberInterface::TYPE_BUSINESS,
                'Mobil' => PhoneNumberInterface::TYPE_MOBILE,
                'Fax' => PhoneNumberInterface::TYPE_FAX,
            ];
            $phoneNumbers = array_map(
                static fn(RufnrType $phoneNumber) => new PhoneNumber(
                    $map[$phoneNumber->getTyp()] ?? PhoneNumberInterface::TYPE_UNKNOWN,
                    $phoneNumber->getOrtsvorwahl(),
                    $phoneNumber->getDurchwahl()
                ),
                $outRecord->getRufnrItem()->getRufnr()
            );
        }

        return $phoneNumbers;
    }
}
