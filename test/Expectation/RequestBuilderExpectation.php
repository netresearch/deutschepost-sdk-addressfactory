<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Test\Expectation;

use PHPUnit\Framework\Assert;
use PostDirekt\Sdk\AddressfactoryDirect\Model\RequestType\InRecordWSType;
use PostDirekt\Sdk\AddressfactoryDirect\Test\TestDouble\RecordStub;

/**
 * Class RequestBuilderExpectation
 *
 * phpcs:disable Generic.Files.LineLength.TooLong
 *
 */
class RequestBuilderExpectation
{
    /**
     * @param RecordStub $requestData
     * @return RequestXPath[]
     */
    public static function getXPaths(RecordStub $requestData): array
    {
        return [
            new RequestXPath('./ns1:NameItem/ns1:Vorname', $requestData->getFirstName()),
            new RequestXPath('./ns1:NameItem/ns1:Name', $requestData->getLastName()),
            new RequestXPath('./ns1:NameItem/ns1:Anrede', $requestData->getSalutation()),
            new RequestXPath('./ns1:NameItem/ns1:Firma1', $requestData->getCompany1()),
            new RequestXPath('./ns1:NameItem/ns1:Firma2', $requestData->getCompany2()),
            new RequestXPath('./ns1:NameItem/ns1:Firma3', $requestData->getCompany3()),
            new RequestXPath('./ns1:NameItem/ns1:Vorsatzwort', $requestData->getPrefix()),
            new RequestXPath('./ns1:NameItem/ns1:Namenszusatz', $requestData->getSuffix()),
            new RequestXPath('./ns1:NameItem/ns1:Titel', $requestData->getAcademicTitle()),
            new RequestXPath('./ns1:NameItem/ns1:Adel', $requestData->getTitleOfNobility()),
            new RequestXPath('./ns1:NameItem/ns1:Geschlecht', $requestData->getGender()),
            new RequestXPath('./ns1:NameItem/ns1:PsPostNr', $requestData->getPostNumber()),
            new RequestXPath('./ns1:NameItem/ns1:Adresszusatz', $requestData->getAddressAddition()),
            new RequestXPath('./ns1:NameItem/ns1:Zustellhinweis', $requestData->getDeliveryInstruction()),
            new RequestXPath('./ns1:RufnrItem/ns1:Rufnr[@typ=\'' . $requestData->getBusinessPhoneType() . '\']/ns1:Ortsvorwahl', $requestData->getBusinessPhoneAreaCode()),
            new RequestXPath('./ns1:RufnrItem/ns1:Rufnr[@typ=\'' . $requestData->getBusinessPhoneType() . '\']/ns1:Durchwahl', $requestData->getBusinessPhoneDialNumber()),
            new RequestXPath('./ns1:RufnrItem/ns1:Rufnr[@typ=\'' . $requestData->getMobilePhoneType() . '\']/ns1:Ortsvorwahl', $requestData->getMobilePhoneAreaCode()),
            new RequestXPath('./ns1:RufnrItem/ns1:Rufnr[@typ=\'' . $requestData->getMobilePhoneType() . '\']/ns1:Durchwahl', $requestData->getMobilePhoneDialNumber()),
            new RequestXPath('./anfragegrund', $requestData->getInquiryReason()),
            new RequestXPath('./geburtsdatum', $requestData->getDateOfBirth()),
            new RequestXPath('./ns1:AdrItem/ns1:Hausanschrift/ns1:Land', $requestData->getCountry()),
            new RequestXPath('./ns1:AdrItem/ns1:Hausanschrift/ns1:Plz', $requestData->getPostalCode()),
            new RequestXPath('./ns1:AdrItem/ns1:Hausanschrift/ns1:Ort', $requestData->getCity()),
            new RequestXPath('./ns1:AdrItem/ns1:Hausanschrift/ns1:Strasse', $requestData->getStreetName()),
            new RequestXPath('./ns1:AdrItem/ns1:Hausanschrift/ns1:Hausnr', $requestData->getStreetNumber()),
            new RequestXPath('./ns1:AdrItem/ns1:Hausanschrift/ns1:Bundesland', $requestData->getState()),
            new RequestXPath('./ns1:AdrItem/ns1:Hausanschrift/ns1:HausnrZusatz', $requestData->getStreetNumberAddition()),
            new RequestXPath('./ns1:AdrItem/ns1:Hausanschrift/ns1:Ortszusatz', $requestData->getCityAddition()),
            new RequestXPath('./ns1:AdrItem/ns1:Hausanschrift/ns1:Ortsteil', $requestData->getUrbanDistrict()),
            new RequestXPath('./ns1:AdrItem/ns1:Hausanschrift/ns1:Gemeinde', $requestData->getMunicipality()),
            new RequestXPath('./ns1:AdrItem/ns1:Hausanschrift/ns1:Kreis', $requestData->getDistrict()),
            new RequestXPath('./ns1:AdrItem/ns1:Hausanschrift/ns1:RegBezirk', $requestData->getRegion()),
            new RequestXPath('./ns1:AdrItem/ns1:Hausanschrift/ns1:Leitdaten/ns1:Leitcode', $requestData->getRoutingCode()),
            new RequestXPath('./ns1:AdrItem/ns1:Hausanschrift/ns1:Leitdaten/ns1:Alort', $requestData->getAlOrt()),
            new RequestXPath('./ns1:AdrItem/ns1:Hausanschrift/ns1:Leitdaten/ns1:Frachtzentrum', $requestData->getCargoCenter()),
            new RequestXPath('./ns1:AdrItem/ns1:Hausanschrift/ns1:Leitdaten/ns1:StrSchluessel', $requestData->getStreetKey()),
            new RequestXPath('./ns1:AdrItem/ns1:Hausanschrift/ns1:Leitdaten/ns1:Kgs', $requestData->getDistrictKey()),

            new RequestXPath('./ns1:GeoItem/ns1:KoordWgs84/ns1:Breite', $requestData->getGeoLat()),
            new RequestXPath('./ns1:GeoItem/ns1:KoordWgs84/ns1:Laenge', $requestData->getGeoLng()),
            new RequestXPath('./ns1:GeoItem/ns1:UtmWgs84/ns1:Nord', $requestData->getGeoUtmNorthing()),
            new RequestXPath('./ns1:GeoItem/ns1:UtmWgs84/ns1:Ost', $requestData->getGeoUtmEasting()),
            new RequestXPath('./ns1:GeoItem/ns1:GkbDhdn/ns1:Hochwert', $requestData->getGeoGkNorthing()),
            new RequestXPath('./ns1:GeoItem/ns1:GkbDhdn/ns1:Rechtswert', $requestData->getGeoGkEasting()),

            new RequestXPath('./ns1:AdrItem/ns1:Postfach/ns1:Nr', $requestData->getPostfachNumber()),
            new RequestXPath('./ns1:AdrItem/ns1:Postfach/ns1:Plz', $requestData->getPostfachPostalCode()),
            new RequestXPath('./ns1:AdrItem/ns1:Postfach/ns1:Ort', $requestData->getPostfachCity()),
            new RequestXPath('./ns1:AdrItem/ns1:Postfach/ns1:Ortszusatz', $requestData->getPostfachCityAddition()),
            new RequestXPath('./ns1:AdrItem/ns1:Postfach/ns1:Leitdaten/ns1:Leitcode', $requestData->getPostfachRoutingCode()),
            new RequestXPath('./ns1:AdrItem/ns1:Postfach/ns1:Leitdaten/ns1:Alort', $requestData->getPostfachAlOrt()),
            new RequestXPath('./ns1:AdrItem/ns1:Postfach/ns1:Leitdaten/ns1:Frachtzentrum', $requestData->getPostfachCargoCenter()),
            new RequestXPath('./ns1:AdrItem/ns1:Postfach/ns1:Leitdaten/ns1:StrSchluessel', $requestData->getPostfachStreetKey()),
            new RequestXPath('./ns1:AdrItem/ns1:Postfach/ns1:Leitdaten/ns1:Kgs', $requestData->getPostfachDistrictKey()),

            new RequestXPath('./ns1:AdrItem/ns1:Packstation/ns1:Nr', $requestData->getPackstationNumber()),
            new RequestXPath('./ns1:AdrItem/ns1:Packstation/ns1:Plz', $requestData->getPackstationPostalCode()),
            new RequestXPath('./ns1:AdrItem/ns1:Packstation/ns1:Ort', $requestData->getPackstationCity()),
            new RequestXPath('./ns1:AdrItem/ns1:Packstation/ns1:Ortszusatz', $requestData->getPackstationCityAddition()),
            new RequestXPath('./ns1:AdrItem/ns1:Packstation/ns1:Bundesland', $requestData->getPackstationState()),
            new RequestXPath('./ns1:AdrItem/ns1:Packstation/ns1:Gemeinde', $requestData->getPackstationMunicipality()),
            new RequestXPath('./ns1:AdrItem/ns1:Packstation/ns1:Kreis', $requestData->getPackstationDistrict()),
            new RequestXPath('./ns1:AdrItem/ns1:Packstation/ns1:RegBezirk', $requestData->getPackstationRegion()),
            new RequestXPath('./ns1:AdrItem/ns1:Packstation/ns1:Leitdaten/ns1:Leitcode', $requestData->getPackstationRoutingCode()),
            new RequestXPath('./ns1:AdrItem/ns1:Packstation/ns1:Leitdaten/ns1:Alort', $requestData->getPackstationAlOrt()),
            new RequestXPath('./ns1:AdrItem/ns1:Packstation/ns1:Leitdaten/ns1:Frachtzentrum', $requestData->getPackstationCargoCenter()),
            new RequestXPath('./ns1:AdrItem/ns1:Packstation/ns1:Leitdaten/ns1:StrSchluessel', $requestData->getPackstationStreetKey()),
            new RequestXPath('./ns1:AdrItem/ns1:Packstation/ns1:Leitdaten/ns1:Kgs', $requestData->getPackstationDistrictKey()),

            new RequestXPath('./ns1:AdrItem/ns1:Postfiliale/ns1:Nr', $requestData->getPostfilialeNumber()),
            new RequestXPath('./ns1:AdrItem/ns1:Postfiliale/ns1:Plz', $requestData->getPostfilialePostalCode()),
            new RequestXPath('./ns1:AdrItem/ns1:Postfiliale/ns1:Ort', $requestData->getPostfilialeCity()),
            new RequestXPath('./ns1:AdrItem/ns1:Postfiliale/ns1:Ortszusatz', $requestData->getPostfilialeCityAddition()),
            new RequestXPath('./ns1:AdrItem/ns1:Postfiliale/ns1:Bundesland', $requestData->getPostfilialeState()),
            new RequestXPath('./ns1:AdrItem/ns1:Postfiliale/ns1:Gemeinde', $requestData->getPostfilialeMunicipality()),
            new RequestXPath('./ns1:AdrItem/ns1:Postfiliale/ns1:Kreis', $requestData->getPostfilialeDistrict()),
            new RequestXPath('./ns1:AdrItem/ns1:Postfiliale/ns1:RegBezirk', $requestData->getPostfilialeRegion()),
            new RequestXPath('./ns1:AdrItem/ns1:Postfiliale/ns1:Leitdaten/ns1:Leitcode', $requestData->getPostfilialeRoutingCode()),
            new RequestXPath('./ns1:AdrItem/ns1:Postfiliale/ns1:Leitdaten/ns1:Alort', $requestData->getPostfilialeAlOrt()),
            new RequestXPath('./ns1:AdrItem/ns1:Postfiliale/ns1:Leitdaten/ns1:Frachtzentrum', $requestData->getPostfilialeCargoCenter()),
            new RequestXPath('./ns1:AdrItem/ns1:Postfiliale/ns1:Leitdaten/ns1:StrSchluessel', $requestData->getPostfilialeStreetKey()),
            new RequestXPath('./ns1:AdrItem/ns1:Postfiliale/ns1:Leitdaten/ns1:Kgs', $requestData->getPostfilialeDistrictKey()),

            new RequestXPath('./ns1:AdrItem/ns1:GE/ns1:Name', $requestData->getCorporateAddressName()),
            new RequestXPath('./ns1:AdrItem/ns1:GE/ns1:Plz', $requestData->getCorporateAddressPostalCode()),
            new RequestXPath('./ns1:AdrItem/ns1:GE/ns1:Ort', $requestData->getCorporateAddressCity()),
            new RequestXPath('./ns1:AdrItem/ns1:GE/ns1:Ortszusatz', $requestData->getCorporateAddressCityAddition()),
            new RequestXPath('./ns1:AdrItem/ns1:GE/ns1:Bundesland', $requestData->getCorporateAddressState()),
            new RequestXPath('./ns1:AdrItem/ns1:GE/ns1:Gemeinde', $requestData->getCorporateAddressMunicipality()),
            new RequestXPath('./ns1:AdrItem/ns1:GE/ns1:Kreis', $requestData->getCorporateAddressDistrict()),
            new RequestXPath('./ns1:AdrItem/ns1:GE/ns1:RegBezirk', $requestData->getCorporateAddressRegion()),
            new RequestXPath('./ns1:AdrItem/ns1:GE/ns1:Leitdaten/ns1:Leitcode', $requestData->getCorporateAddressRoutingCode()),
            new RequestXPath('./ns1:AdrItem/ns1:GE/ns1:Leitdaten/ns1:Alort', $requestData->getCorporateAddressAlOrt()),
            new RequestXPath('./ns1:AdrItem/ns1:GE/ns1:Leitdaten/ns1:Frachtzentrum', $requestData->getCorporateAddressCargoCenter()),
            new RequestXPath('./ns1:AdrItem/ns1:GE/ns1:Leitdaten/ns1:StrSchluessel', $requestData->getCorporateAddressStreetKey()),
            new RequestXPath('./ns1:AdrItem/ns1:GE/ns1:Leitdaten/ns1:Kgs', $requestData->getCorporateAddressDistrictKey()),

            new RequestXPath('./ns1:ExtFieldItem/ns1:ExtField[@name=\'' . $requestData->getOrderIdKey() . '\']', $requestData->getOrderIdValue()),
            new RequestXPath('./ns1:ExtFieldItem/ns1:ExtField[@name=\'' . $requestData->getAddressIdKey() . '\']', $requestData->getAddressIdValue()),
        ];
    }

    public static function assertMetaPresent(
        string $requestXml,
        string $sessionId,
        string $configName,
        string $clientId
    ): void {
        $request = new \SimpleXMLElement($requestXml);
        $request->registerXPathNamespace('SOAP-ENV', 'http://schemas.xmlsoap.org/soap/envelope/');
        $request->registerXPathNamespace('ns1', 'http://www.postdirekt.de/schema/af/data/v_1_1');
        $request->registerXPathNamespace('ns2', 'http://service.v_1_1.direct.af.postdirekt.de/');
        $request = $request->xpath('/SOAP-ENV:Envelope/SOAP-ENV:Body/ns2:processData')[0];

        Assert::assertSame($sessionId, (string) $request->xpath('./sessionId')[0]);
        Assert::assertSame($configName, (string) $request->xpath('./configName')[0]);
        Assert::assertSame($clientId, (string) $request->xpath('./mandantId')[0]);
    }

    public static function assertDataPresent(
        string $requestXml,
        RecordStub $requestData,
        InRecordWSType $requestType
    ): void {
        $request = new \SimpleXMLElement($requestXml);
        $request->registerXPathNamespace('SOAP-ENV', 'http://schemas.xmlsoap.org/soap/envelope/');
        $request->registerXPathNamespace('ns1', 'http://www.postdirekt.de/schema/af/data/v_1_1');
        $request->registerXPathNamespace('ns2', 'http://service.v_1_1.direct.af.postdirekt.de/');
        $inRecord = $request->xpath('/SOAP-ENV:Envelope/SOAP-ENV:Body/ns2:processData/inRecord[@recordId=\'' . $requestType->getRecordId() . '\']')[0];

        Assert::assertSame($requestData->getRecordId(), (int) $inRecord->attributes()['recordId']);
        Assert::assertSame($requestData->getFileType(), (string) $inRecord->attributes()['fileType']);
        Assert::assertSame($requestData->getFileId(), (int) $inRecord->attributes()['fileId']);
        Assert::assertSame($requestData->getSequenceId(), (int) $inRecord->attributes()['sequenceId']);

        foreach (self::getXPaths($requestData) as $expectation) {
            $value = $inRecord->xpath($expectation->getXpath());
            if (empty($value)) {
                Assert::fail(
                    sprintf(
                        'Value "%s" not found at //inRecord[@recordId=\'' . $requestData->getRecordId() . '\']/%s.',
                        $expectation->getValue(),
                        $expectation->getXpath()
                    )
                );
            }

            Assert::assertSame($expectation->getValue(), (string) $inRecord->xpath($expectation->getXpath())[0]);
        }
    }
}
