<?php

/**
 * See LICENSE.md for license details.
 */

namespace PostDirekt\Sdk\AddressfactoryDirect\Test\TestDouble;

use PostDirekt\Sdk\AddressfactoryDirect\Api\RequestBuilderInterface;
use PostDirekt\Sdk\AddressfactoryDirect\RequestBuilder\RequestBuilder;

/**
 * Request record with pre-defined data.
 *
 * @author Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class RecordStub
{
    public function getRecordId(): int
    {
        return 303;
    }

    public function getFileType(): string
    {
        return RequestBuilder::FILE_TYPE_PURGE;
    }

    public function getFileId(): int
    {
        return 123;
    }

    public function getSequenceId(): int
    {
        return 456;
    }

    public function getFirstName(): string
    {
        return 'Marta';
    }

    public function getLastName(): string
    {
        return 'Mustermania';
    }

    public function getSalutation(): string
    {
        return 'Frau';
    }

    public function getCompany1(): string
    {
        return 'Foo Company';
    }

    public function getCompany2(): string
    {
        return 'Bar Division';
    }

    public function getCompany3(): string
    {
        return 'Baz Department';
    }

    public function getPrefix(): string
    {
        return 'zu';
    }

    public function getSuffix(): string
    {
        return 'd.Ä.';
    }

    public function getAcademicTitle(): string
    {
        return 'Prof. Dr.';
    }

    public function getTitleOfNobility(): string
    {
        return 'Baronin';
    }

    public function getGender(): string
    {
        return 'W';
    }

    public function getBusinessPhoneAreaCode(): string
    {
        return '1234';
    }

    public function getBusinessPhoneDialNumber(): string
    {
        return '567890';
    }

    public function getBusinessPhoneType(): string
    {
        return RequestBuilderInterface::PHONE_TYPE_BUSINESS;
    }

    public function getMobilePhoneAreaCode(): string
    {
        return '0987';
    }

    public function getMobilePhoneDialNumber(): string
    {
        return '654321';
    }

    public function getMobilePhoneType(): string
    {
        return RequestBuilderInterface::PHONE_TYPE_MOBILE;
    }

    public function getPostNumber(): string
    {
        return '123456XX';
    }

    public function getInquiryReason(): string
    {
        return 'because important';
    }

    public function getDateOfBirth(): string
    {
        return '1913-12-11';
    }

    public function getCountry(): string
    {
        return 'duitsland';
    }

    public function getPostalCode(): string
    {
        return '33739';
    }

    public function getCity(): string
    {
        return 'Bielelfeld';
    }

    public function getStreetName(): string
    {
        return 'Strusenweg';
    }

    public function getStreetNumber(): string
    {
        return '36';
    }

    public function getState(): string
    {
        return 'Nordrhein-Westfalen';
    }

    public function getAddressAddition(): string
    {
        return 'c/o Lisa Muller';
    }

    public function getDeliveryInstruction(): string
    {
        return 'Souterrain';
    }

    public function getStreetNumberAddition(): string
    {
        return 'B';
    }

    public function getCityAddition(): string
    {
        return 'bei Gütersloh';
    }

    public function getUrbanDistrict(): string
    {
        return 'Altenhagen';
    }

    public function getMunicipality(): string
    {
        return 'Bielefeld, Stadt 1';
    }

    public function getDistrict(): string
    {
        return 'Bielefeld, Stadt 2';
    }

    public function getRegion(): string
    {
        return 'Reg.-Bez. Detmold';
    }

    public function getRoutingCode(): string
    {
        return '12-abc';
    }

    public function getAlOrt(): string
    {
        return '12-def';
    }

    public function getCargoCenter(): string
    {
        return 'cargo center';
    }

    public function getStreetKey(): string
    {
        return '12-ghi';
    }

    public function getDistrictKey(): string
    {
        return '12-jkl';
    }

    public function getGeoLat(): string
    {
        return (string) 50.7214;
    }

    public function getGeoLng(): string
    {
        return (string) 7.1204;
    }

    public function getGeoUtmNorthing(): string
    {
        return (string) 367325.64648770774;
    }

    public function getGeoUtmEasting(): string
    {
        return (string) 5620529.081787705;
    }

    public function getGeoGkNorthing(): string
    {
        return (string) 5621252.89057518;
    }

    public function getGeoGkEasting(): string
    {
        return (string) 2579160.87986511;
    }

    public function getPostfachNumber(): string
    {
        return '987';
    }

    public function getPostfachPostalCode(): string
    {
        return '53112';
    }

    public function getPostfachCity(): string
    {
        return 'Bonn';
    }

    public function getPostfachCityAddition(): string
    {
        return 'am Rhein';
    }

    public function getPostfachRoutingCode(): string
    {
        return '34-abc';
    }

    public function getPostfachAlOrt(): string
    {
        return '34-def';
    }

    public function getPostfachCargoCenter(): string
    {
        return 'pf cargo center';
    }

    public function getPostfachStreetKey(): string
    {
        return '34-ghi';
    }

    public function getPostfachDistrictKey(): string
    {
        return '34-jkl';
    }

    public function getPackstationNumber(): string
    {
        return '142';
    }

    public function getPackstationPostalCode(): string
    {
        return '04229';
    }

    public function getPackstationCity(): string
    {
        return 'Leipzig (PS)';
    }

    public function getPackstationCityAddition(): string
    {
        return 'r.a.S. (PS)';
    }

    public function getPackstationState(): string
    {
        return 'Sachsen (PS)';
    }

    public function getPackstationMunicipality(): string
    {
        return 'Leipzig, Stadt 1 (PS)';
    }

    public function getPackstationDistrict(): string
    {
        return 'Leipzig, Stadt 2 (PS)';
    }

    public function getPackstationRegion(): string
    {
        return 'Direktionsbezirk Leipzig (PS)';
    }

    public function getPackstationRoutingCode(): string
    {
        return '56-abc';
    }

    public function getPackstationAlOrt(): string
    {
        return '56-def';
    }

    public function getPackstationCargoCenter(): string
    {
        return 'ps cargo center';
    }

    public function getPackstationStreetKey(): string
    {
        return '56-ghi';
    }

    public function getPackstationDistrictKey(): string
    {
        return '56-jkl';
    }

    public function getPostfilialeNumber(): string
    {
        return '663';
    }

    public function getPostfilialePostalCode(): string
    {
        return '04227';
    }

    public function getPostfilialeCity(): string
    {
        return 'Leipzig (PF)';
    }

    public function getPostfilialeCityAddition(): string
    {
        return 'r.a.S. (PF)';
    }

    public function getPostfilialeState(): string
    {
        return 'Sachsen (PF)';
    }

    public function getPostfilialeMunicipality(): string
    {
        return 'Leipzig, Stadt 1 (PF)';
    }

    public function getPostfilialeDistrict(): string
    {
        return 'Leipzig, Stadt 2 (PF)';
    }

    public function getPostfilialeRegion(): string
    {
        return 'Direktionsbezirk Leipzig (PF)';
    }

    public function getPostfilialeRoutingCode(): string
    {
        return '78-abc';
    }

    public function getPostfilialeAlOrt(): string
    {
        return '78-def';
    }

    public function getPostfilialeCargoCenter(): string
    {
        return 'pf cargo center';
    }

    public function getPostfilialeStreetKey(): string
    {
        return '78-ghi';
    }

    public function getPostfilialeDistrictKey(): string
    {
        return '78-jkl';
    }

    public function getCorporateAddressName(): string
    {
        return 'GE';
    }

    public function getCorporateAddressPostalCode(): string
    {
        return '04356';
    }

    public function getCorporateAddressCity(): string
    {
        return 'Leipzig (CA)';
    }

    public function getCorporateAddressCityAddition(): string
    {
        return 'r.a.S. (CA)';
    }

    public function getCorporateAddressState(): string
    {
        return 'Sachsen (CA)';
    }

    public function getCorporateAddressMunicipality(): string
    {
        return 'Leipzig, Stadt 1 (Ca)';
    }

    public function getCorporateAddressDistrict(): string
    {
        return 'Leipzig, Stadt 2 (CA)';
    }

    public function getCorporateAddressRegion(): string
    {
        return 'Direktionsbezirk Leipzig (CA)';
    }

    public function getCorporateAddressRoutingCode(): string
    {
        return '90-abc';
    }

    public function getCorporateAddressAlOrt(): string
    {
        return '90-def';
    }

    public function getCorporateAddressCargoCenter(): string
    {
        return 'ca cargo center';
    }

    public function getCorporateAddressStreetKey(): string
    {
        return '90-ghi';
    }

    public function getCorporateAddressDistrictKey(): string
    {
        return '90-jkl';
    }

    public function getOrderIdKey(): string
    {
        return 'order_id';
    }

    public function getOrderIdValue(): string
    {
        return '100043873';
    }

    public function getAddressIdKey(): string
    {
        return 'order_address_id';
    }

    public function getAddressIdValue(): string
    {
        return (string) 87746;
    }
}
