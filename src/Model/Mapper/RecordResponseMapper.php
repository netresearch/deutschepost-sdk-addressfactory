<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Mapper;

use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PhoneNumberInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\RecordInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\NameItemType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\OrtszusatzType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\OrtType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\RufnrType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\StrasseType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\ModuleCodesType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\OutRecordWSType;
use PostDirekt\Sdk\AddressfactoryDirect\Service\AddressFactoryService\Address;
use PostDirekt\Sdk\AddressfactoryDirect\Service\AddressFactoryService\GeoData;
use PostDirekt\Sdk\AddressfactoryDirect\Service\AddressFactoryService\GeoDataGk;
use PostDirekt\Sdk\AddressfactoryDirect\Service\AddressFactoryService\GeoDataUtm;
use PostDirekt\Sdk\AddressfactoryDirect\Service\AddressFactoryService\Person;
use PostDirekt\Sdk\AddressfactoryDirect\Service\AddressFactoryService\PhoneNumber;
use PostDirekt\Sdk\AddressfactoryDirect\Service\AddressFactoryService\Record;

/**
 * Class RecordResponseMapper
 *
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class RecordResponseMapper
{
    /**
     * @param OutRecordWSType $outRecord
     *
     * @return RecordInterface
     */
    public function map(OutRecordWSType $outRecord): RecordInterface
    {
        $person = $address = $coords = $utm = $gk = null;
        $phoneNumbers = [];

        // Person
        if ($outRecord->getNameItem() !== null) {
            $name = $outRecord->getNameItem();

            $person = new Person(
                $name->getAnrede(),
                $name->getVorname(),
                $name->getName(),
                [
                    $name->getFirma1(),
                    $name->getFirma2(),
                    $name->getFirma3()
                ],
                $name->getVorsatzwort(),
                $name->getNamenszusatz(),
                $name->getTitel(),
                $name->getAdel(),
                $name->getGeschlecht(),
                $name->getPsPostNr()
            );
        }

        // Address
        if ($outRecord->getAdrItem() !== null && $outRecord->getAdrItem()->getHausanschrift() !== null) {
            $adr = $outRecord->getAdrItem()->getHausanschrift();

            $city = $adr->getOrt();
            $cityAddition = $adr->getOrtszusatz();
            $street = $adr->getStrasse();
            $name = $outRecord->getNameItem();

            $address = new Address(
                $adr->getLand(),
                $adr->getPlz(),
                $adr->getBundesland(),
                $adr->getRegBezirk(),
                $adr->getKreis(),
                $adr->getGemeinde(),
                $city instanceof OrtType ? $city->getValue() : '',
                $cityAddition instanceof OrtszusatzType ? $cityAddition->getValue() : '',
                $adr->getOrtsteil(),
                $street instanceof StrasseType ? $street->getValue() : '',
                $adr->getHausnr(),
                $adr->getHausnrZusatz(),
                $name instanceof NameItemType ? $name->getAdresszusatz() : '',
                $name instanceof NameItemType ? $name->getZustellhinweis() : ''
            );
        }

        // Geo Data
        if ($outRecord->getGeoItem() !== null) {
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
                function (RufnrType $phoneNumber) use ($map) {
                    return new PhoneNumber(
                        $map[$phoneNumber->getTyp()] ?? PhoneNumberInterface::TYPE_UNKNOWN,
                        $phoneNumber->getOrtsvorwahl(),
                        $phoneNumber->getDurchwahl()
                    );
                },
                $outRecord->getRufnrItem()->getRufnr()
            );
        }

        // Status Codes
        $statusCodes = array_reduce(
            $outRecord->getStatusItem()->getPDStatusCodeItem()->getModuleCodes(),
            function (array $codes, ModuleCodesType $moduleCodes) {
                $codes = array_merge($codes, $moduleCodes->getStatusCode());
                return $codes;
            },
            []
        );

        return new Record(
            $outRecord->getRecordId(),
            $person,
            $address,
            $coords,
            $utm,
            $gk,
            $phoneNumbers,
            $statusCodes
        );
    }
}
