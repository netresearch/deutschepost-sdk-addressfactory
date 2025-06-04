<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Test\Expectation;

use PHPUnit\Framework\Assert;
use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PhoneNumberInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\RecordInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Api\RequestBuilderInterface;

/**
 * Class ResponseRecordExpectation
 *
 * phpcs:disable Generic.Files.LineLength.TooLong
 */
class ResponseRecordExpectation
{
    /**
     * @return RequestXPath[]
     */
    public static function getXPaths(RecordInterface $response): array
    {
        $company = $response->getPerson() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PersonInterface ? $response->getPerson()->getCompany() : [];

        return [
            new RequestXPath('./af:NameItem/af:Anrede', $response->getPerson() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PersonInterface ? $response->getPerson()->getSalutation() : ''),
            new RequestXPath('./af:NameItem/af:Vorname', $response->getPerson() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PersonInterface ? $response->getPerson()->getFirstName() : ''),
            new RequestXPath('./af:NameItem/af:Name', $response->getPerson() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PersonInterface ? $response->getPerson()->getLastName() : ''),
            new RequestXPath('./af:NameItem/af:Firma1', $company[0] ?? ''),
            new RequestXPath('./af:NameItem/af:Firma2', $company[1] ?? ''),
            new RequestXPath('./af:NameItem/af:Firma3', $company[2] ?? ''),
            new RequestXPath('./af:NameItem/af:Vorsatzwort', $response->getPerson() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PersonInterface ? $response->getPerson()->getPrefix() : ''),
            new RequestXPath('./af:NameItem/af:Namenszusatz', $response->getPerson() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PersonInterface ? $response->getPerson()->getSuffix() : ''),
            new RequestXPath('./af:NameItem/af:Titel', $response->getPerson() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PersonInterface ? $response->getPerson()->getAcademicTitle() : ''),
            new RequestXPath('./af:NameItem/af:Adel', $response->getPerson() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PersonInterface ? $response->getPerson()->getTitleOfNobility() : ''),
            new RequestXPath('./af:NameItem/af:Geschlecht', $response->getPerson() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PersonInterface ? $response->getPerson()->getGender() : ''),
            new RequestXPath('./af:NameItem/af:PsPostNr', $response->getPerson() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PersonInterface ? $response->getPerson()->getPostNumber() : ''),

            new RequestXPath('./af:AdrItem/af:Hausanschrift/af:Land', $response->getAddress() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\AddressInterface ? $response->getAddress()->getCountry() : ''),
            new RequestXPath('./af:AdrItem/af:Hausanschrift/af:Plz', $response->getAddress() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\AddressInterface ? $response->getAddress()->getPostalCode() : ''),
            new RequestXPath('./af:AdrItem/af:Hausanschrift/af:Bundesland', $response->getAddress() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\AddressInterface ? $response->getAddress()->getState() : ''),
            new RequestXPath('./af:AdrItem/af:Hausanschrift/af:RegBezirk', $response->getAddress() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\AddressInterface ? $response->getAddress()->getRegion() : ''),
            new RequestXPath('./af:AdrItem/af:Hausanschrift/af:Kreis', $response->getAddress() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\AddressInterface ? $response->getAddress()->getDistrict() : ''),
            new RequestXPath('./af:AdrItem/af:Hausanschrift/af:Gemeinde', $response->getAddress() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\AddressInterface ? $response->getAddress()->getMunicipality() : ''),
            new RequestXPath('./af:AdrItem/af:Hausanschrift/af:Ort', $response->getAddress() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\AddressInterface ? $response->getAddress()->getCity() : ''),
            new RequestXPath('./af:AdrItem/af:Hausanschrift/af:Ortszusatz', $response->getAddress() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\AddressInterface ? $response->getAddress()->getCityAddition() : ''),
            new RequestXPath('./af:AdrItem/af:Hausanschrift/af:Ortsteil', $response->getAddress() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\AddressInterface ? $response->getAddress()->getUrbanDistrict() : ''),
            new RequestXPath('./af:AdrItem/af:Hausanschrift/af:Strasse', $response->getAddress() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\AddressInterface ? $response->getAddress()->getStreetName() : ''),
            new RequestXPath('./af:AdrItem/af:Hausanschrift/af:Hausnr', $response->getAddress() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\AddressInterface ? $response->getAddress()->getStreetNumber() : ''),
            new RequestXPath('./af:AdrItem/af:Hausanschrift/af:HausnrZusatz', $response->getAddress() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\AddressInterface ? $response->getAddress()->getStreetNumberAddition() : ''),
            new RequestXPath('./af:NameItem/af:Adresszusatz', $response->getAddress() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\AddressInterface ? $response->getAddress()->getAddressAddition() : ''),
            new RequestXPath('./af:NameItem/af:Zustellhinweis', $response->getAddress() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\AddressInterface ? $response->getAddress()->getDeliveryInstruction() : ''),

            new RequestXPath('./af:AdrItem/af:Postfiliale/af:Nr', $response->getPostOffice() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PostOfficeInterface ? $response->getPostOffice()->getNumber() : ''),
            new RequestXPath('./af:AdrItem/af:Postfiliale/af:Plz', $response->getPostOffice() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PostOfficeInterface ? $response->getPostOffice()->getPostalCode() : ''),
            new RequestXPath('./af:AdrItem/af:Postfiliale/af:Ort', $response->getPostOffice() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PostOfficeInterface ? $response->getPostOffice()->getCity() : ''),
            new RequestXPath('./af:AdrItem/af:Postfiliale/af:Ortszusatz', $response->getPostOffice() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PostOfficeInterface ? $response->getPostOffice()->getCityAddition() : ''),
            new RequestXPath('./af:AdrItem/af:Postfiliale/af:Bundesland', $response->getPostOffice() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PostOfficeInterface ? $response->getPostOffice()->getState() : ''),
            new RequestXPath('./af:AdrItem/af:Postfiliale/af:Gemeinde', $response->getPostOffice() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PostOfficeInterface ? $response->getPostOffice()->getMunicipality() : ''),
            new RequestXPath('./af:AdrItem/af:Postfiliale/af:Kreis', $response->getPostOffice() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PostOfficeInterface ? $response->getPostOffice()->getDistrict() : ''),
            new RequestXPath('./af:AdrItem/af:Postfiliale/af:RegBezirk', $response->getPostOffice() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PostOfficeInterface ? $response->getPostOffice()->getRegion() : ''),

            new RequestXPath('./af:AdrItem/af:Postfach/af:Nr', $response->getPostalBox() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PostalBoxInterface ? $response->getPostalBox()->getNumber() : ''),
            new RequestXPath('./af:AdrItem/af:Postfach/af:Plz', $response->getPostalBox() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PostalBoxInterface ? $response->getPostalBox()->getPostalCode() : ''),
            new RequestXPath('./af:AdrItem/af:Postfach/af:Ort', $response->getPostalBox() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PostalBoxInterface ? $response->getPostalBox()->getCity() : ''),
            new RequestXPath('./af:AdrItem/af:Postfach/af:Ortszusatz', $response->getPostalBox() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PostalBoxInterface ? $response->getPostalBox()->getCityAddition() : ''),

            new RequestXPath('./af:AdrItem/af:GE/af:Name', $response->getBulkReceiver() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\BulkReceiverInterface ? $response->getBulkReceiver()->getName() : ''),
            new RequestXPath('./af:AdrItem/af:GE/af:Plz', $response->getBulkReceiver() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\BulkReceiverInterface ? $response->getBulkReceiver()->getPostalCode() : ''),
            new RequestXPath('./af:AdrItem/af:GE/af:Ort', $response->getBulkReceiver() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\BulkReceiverInterface ? $response->getBulkReceiver()->getCity() : ''),
            new RequestXPath('./af:AdrItem/af:GE/af:Ortszusatz', $response->getBulkReceiver() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\BulkReceiverInterface ? $response->getBulkReceiver()->getCityAddition() : ''),
            new RequestXPath('./af:AdrItem/af:GE/af:Bundesland', $response->getBulkReceiver() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\BulkReceiverInterface ? $response->getBulkReceiver()->getState() : ''),
            new RequestXPath('./af:AdrItem/af:GE/af:Gemeinde', $response->getBulkReceiver() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\BulkReceiverInterface ? $response->getBulkReceiver()->getMunicipality() : ''),
            new RequestXPath('./af:AdrItem/af:GE/af:Kreis', $response->getBulkReceiver() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\BulkReceiverInterface ? $response->getBulkReceiver()->getDistrict() : ''),
            new RequestXPath('./af:AdrItem/af:GE/af:RegBezirk', $response->getBulkReceiver() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\BulkReceiverInterface ? $response->getBulkReceiver()->getRegion() : ''),

            new RequestXPath('./af:GeoItem/af:KoordWgs84/af:Breite', $response->getGeoData() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\GeoDataInterface ? $response->getGeoData()->getLatitude() : ''),
            new RequestXPath('./af:GeoItem/af:KoordWgs84/af:Laenge', $response->getGeoData() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\GeoDataInterface ? $response->getGeoData()->getLongitude() : ''),

            new RequestXPath('./af:GeoItem/af:UtmWgs84/af:Ost', $response->getGeoDataUtm() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\GeoDataUtmInterface ? $response->getGeoDataUtm()->getEasting() : ''),
            new RequestXPath('./af:GeoItem/af:UtmWgs84/af:Nord', $response->getGeoDataUtm() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\GeoDataUtmInterface ? $response->getGeoDataUtm()->getNorthing() : ''),

            new RequestXPath('./af:GeoItem/af:GkbDhdn/af:Rechtswert', $response->getGeoDataGk() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\GeoDataGkInterface ? $response->getGeoDataGk()->getEasting() : ''),
            new RequestXPath('./af:GeoItem/af:GkbDhdn/af:Hochwert', $response->getGeoDataGk() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\GeoDataGkInterface ? $response->getGeoDataGk()->getNorthing() : ''),

            new RequestXPath('./af:AdrItem/af:Hausanschrift/af:Leitdaten/af:Leitcode', $response->getRoutingData() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\RoutingDataInterface ? $response->getRoutingData()->getRoutingCode() : ''),
            new RequestXPath('./af:AdrItem/af:Hausanschrift/af:Leitdaten/af:Alort', $response->getRoutingData() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\RoutingDataInterface ? $response->getRoutingData()->getAlOrt() : ''),
            new RequestXPath('./af:AdrItem/af:Hausanschrift/af:Leitdaten/af:Frachtzentrum', $response->getRoutingData() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\RoutingDataInterface ? $response->getRoutingData()->getCargoCenter() : ''),
            new RequestXPath('./af:AdrItem/af:Hausanschrift/af:Leitdaten/af:StrSchluessel', $response->getRoutingData() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\RoutingDataInterface ? $response->getRoutingData()->getStreetKey() : ''),
            new RequestXPath('./af:AdrItem/af:Hausanschrift/af:Leitdaten/af:Kgs', $response->getRoutingData() instanceof \PostDirekt\Sdk\AddressfactoryDirect\Api\Data\RoutingDataInterface ? $response->getRoutingData()->getDistrictKey() : ''),
        ];
    }

    public static function assertDataPresent(RecordInterface $response, string $responseXml): void
    {
        $request = new \SimpleXMLElement($responseXml);
        $request->registerXPathNamespace('soap', 'http://schemas.xmlsoap.org/soap/envelope/');
        $request->registerXPathNamespace('af', 'http://www.postdirekt.de/schema/af/data/v_1_1');
        $request->registerXPathNamespace('ns3', 'http://service.v_1_1.direct.af.postdirekt.de/');
        $outRecord = $request->xpath('/soap:Envelope/soap:Body/*/outRecord[@recordId=\'' . $response->getRecordId() . '\']')[0];

        foreach (self::getXPaths($response) as $expectation) {
            $node = $outRecord->xpath($expectation->getXpath());
            if (empty($node)) {
                continue;
            }

            Assert::assertSame($expectation->getValue(), (string) $node[0]);
        }

        $statusCodes = $outRecord->xpath('./af:StatusItem/af:PDStatusCodeItem/af:ModuleCodes/af:StatusCode');
        foreach ($statusCodes as $statusCode) {
            Assert::assertContains((string) $statusCode, $response->getStatusCodes());
        }

        $phoneNumbers = $outRecord->xpath('./af:RufnrItem/af:Rufnr');
        $typeMap = [
            RequestBuilderInterface::PHONE_TYPE_UNKNOWN => PhoneNumberInterface::TYPE_UNKNOWN,
            RequestBuilderInterface::PHONE_TYPE_PRIVATE => PhoneNumberInterface::TYPE_PRIVATE,
            RequestBuilderInterface::PHONE_TYPE_BUSINESS => PhoneNumberInterface::TYPE_BUSINESS,
            RequestBuilderInterface::PHONE_TYPE_MOBILE => PhoneNumberInterface::TYPE_MOBILE,
            RequestBuilderInterface::PHONE_TYPE_FAX => PhoneNumberInterface::TYPE_FAX,
        ];

        foreach ($phoneNumbers as $phoneNumber) {
            $areaCode = (string) $phoneNumber->xpath('./af:Ortsvorwahl')[0];
            $dialNumber = (string) $phoneNumber->xpath('./af:Durchwahl')[0];
            $type = $typeMap[(string) $phoneNumber->attributes()['typ']];

            $match = array_filter(
                $response->getPhoneNumbers(),
                fn(PhoneNumberInterface $phone): bool => $type === $phone->getType()
                    && $areaCode === $phone->getAreaCode()
                    && $dialNumber === $phone->getDialNumber()
            );

            $failureMessage = sprintf('Phone number %s %s (%s) was not mapped.', $areaCode, $dialNumber, $type);
            Assert::assertNotEmpty($match, $failureMessage);
        }
    }
}
