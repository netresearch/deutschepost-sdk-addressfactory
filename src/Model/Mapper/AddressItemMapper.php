<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Mapper;

use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\ParcelStationInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PostOfficeInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\AdrItemType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\GEType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\HausanschriftType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\NameItemType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\OrtszusatzType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\OrtType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\PackstationType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\PostfachType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\PostfilialeType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\StrasseType;
use PostDirekt\Sdk\AddressfactoryDirect\Service\AddressVerificationService\Address;
use PostDirekt\Sdk\AddressfactoryDirect\Service\AddressVerificationService\BulkReceiver;
use PostDirekt\Sdk\AddressfactoryDirect\Service\AddressVerificationService\ParcelStation;
use PostDirekt\Sdk\AddressfactoryDirect\Service\AddressVerificationService\PostalBox;
use PostDirekt\Sdk\AddressfactoryDirect\Service\AddressVerificationService\PostOffice;

class AddressItemMapper
{
    public function mapParcelStation(AdrItemType $adrItem): ?ParcelStationInterface
    {
        if ($adrItem->getPackstation() === null) {
            return null;
        }
        /** @var PackstationType $adr */
        $adr = $adrItem->getPackstation();
        $city = $adr->getOrt();
        $cityAddition = $adr->getOrtszusatz();

        return new ParcelStation(
            $adr->getNr(),
            $adr->getPlz(),
            $adr->getBundesland(),
            $adr->getRegBezirk(),
            $adr->getKreis(),
            $adr->getGemeinde(),
            $city instanceof OrtType ? $city->getValue() : '',
            $cityAddition instanceof OrtszusatzType ? $cityAddition->getValue() : ''
        );
    }

    public function mapPostOffice(AdrItemType $adrItem): ?PostOfficeInterface
    {
        if ($adrItem->getPostfiliale() === null) {
            return null;
        }
        /** @var PostfilialeType $adr */
        $adr = $adrItem->getPostfiliale();
        $city = $adr->getOrt();
        $cityAddition = $adr->getOrtszusatz();

        return new PostOffice(
            $adr->getNr(),
            $adr->getPlz(),
            $adr->getBundesland(),
            $adr->getRegBezirk(),
            $adr->getKreis(),
            $adr->getGemeinde(),
            $city instanceof OrtType ? $city->getValue() : '',
            $cityAddition instanceof OrtszusatzType ? $cityAddition->getValue() : ''
        );
    }

    public function mapBulkReceiver(AdrItemType $adrItem): ?BulkReceiver
    {
        if ($adrItem->getGE() === null) {
            return null;
        }
        /** @var GEType $adr */
        $adr = $adrItem->getGE();
        $city = $adr->getOrt();
        $cityAddition = $adr->getOrtszusatz();

        return new BulkReceiver(
            $adr->getName(),
            $adr->getPlz(),
            $adr->getBundesland(),
            $adr->getRegBezirk(),
            $adr->getKreis(),
            $adr->getGemeinde(),
            $city instanceof OrtType ? $city->getValue() : '',
            $cityAddition instanceof OrtszusatzType ? $cityAddition->getValue() : ''
        );
    }

    public function mapPostalBox(AdrItemType $adrItem): ?PostalBox
    {
        if ($adrItem->getPostfach() === null) {
            return null;
        }
        /** @var PostfachType $adr */
        $adr = $adrItem->getPostfach();
        $city = $adr->getOrt();
        $cityAddition = $adr->getOrtszusatz();

        return new PostalBox(
            $adr->getNr(),
            $adr->getPlz(),
            $city instanceof OrtType ? $city->getValue() : '',
            $cityAddition instanceof OrtszusatzType ? $cityAddition->getValue() : ''
        );
    }

    public function mapAddress(AdrItemType $adrItem, ?NameItemType $name): ?Address
    {
        if ($adrItem->getHausanschrift() === null) {
            return null;
        }
        /** @var HausanschriftType $adr */
        $adr = $adrItem->getHausanschrift();

        $city = $adr->getOrt();
        $cityAddition = $adr->getOrtszusatz();
        $street = $adr->getStrasse();

        return new Address(
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
}
