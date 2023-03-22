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
        $company = $response->getPerson() !== null ? $response->getPerson()->getCompany() : [];

        return [
            new RequestXPath('./af:NameItem/af:Anrede', $response->getPerson() !== null ? $response->getPerson()->getSalutation() : ''),
            new RequestXPath('./af:NameItem/af:Vorname', $response->getPerson() !== null ? $response->getPerson()->getFirstName() : ''),
            new RequestXPath('./af:NameItem/af:Name', $response->getPerson() !== null ? $response->getPerson()->getLastName() : ''),
            new RequestXPath('./af:NameItem/af:Firma1', $company[0] ?? ''),
            new RequestXPath('./af:NameItem/af:Firma2', $company[1] ?? ''),
            new RequestXPath('./af:NameItem/af:Firma3', $company[2] ?? ''),
            new RequestXPath('./af:NameItem/af:Vorsatzwort', $response->getPerson() !== null ? $response->getPerson()->getPrefix() : ''),
            new RequestXPath('./af:NameItem/af:Namenszusatz', $response->getPerson() !== null ? $response->getPerson()->getSuffix() : ''),
            new RequestXPath('./af:NameItem/af:Titel', $response->getPerson() !== null ? $response->getPerson()->getAcademicTitle() : ''),
            new RequestXPath('./af:NameItem/af:Adel', $response->getPerson() !== null ? $response->getPerson()->getTitleOfNobility() : ''),
            new RequestXPath('./af:NameItem/af:Geschlecht', $response->getPerson() !== null ? $response->getPerson()->getGender() : ''),
            new RequestXPath('./af:NameItem/af:PsPostNr', $response->getPerson() !== null ? $response->getPerson()->getPostNumber() : ''),

            new RequestXPath('./af:AdrItem/af:Hausanschrift/af:Land', $response->getAddress() !== null ? $response->getAddress()->getCountry() : ''),
            new RequestXPath('./af:AdrItem/af:Hausanschrift/af:Plz', $response->getAddress() !== null ? $response->getAddress()->getPostalCode() : ''),
            new RequestXPath('./af:AdrItem/af:Hausanschrift/af:Bundesland', $response->getAddress() !== null ? $response->getAddress()->getState() : ''),
            new RequestXPath('./af:AdrItem/af:Hausanschrift/af:RegBezirk', $response->getAddress() !== null ? $response->getAddress()->getRegion() : ''),
            new RequestXPath('./af:AdrItem/af:Hausanschrift/af:Kreis', $response->getAddress() !== null ? $response->getAddress()->getDistrict() : ''),
            new RequestXPath('./af:AdrItem/af:Hausanschrift/af:Gemeinde', $response->getAddress() !== null ? $response->getAddress()->getMunicipality() : ''),
            new RequestXPath('./af:AdrItem/af:Hausanschrift/af:Ort', $response->getAddress() !== null ? $response->getAddress()->getCity() : ''),
            new RequestXPath('./af:AdrItem/af:Hausanschrift/af:Ortszusatz', $response->getAddress() !== null ? $response->getAddress()->getCityAddition() : ''),
            new RequestXPath('./af:AdrItem/af:Hausanschrift/af:Ortsteil', $response->getAddress() !== null ? $response->getAddress()->getUrbanDistrict() : ''),
            new RequestXPath('./af:AdrItem/af:Hausanschrift/af:Strasse', $response->getAddress() !== null ? $response->getAddress()->getStreetName() : ''),
            new RequestXPath('./af:AdrItem/af:Hausanschrift/af:Hausnr', $response->getAddress() !== null ? $response->getAddress()->getStreetNumber() : ''),
            new RequestXPath('./af:AdrItem/af:Hausanschrift/af:HausnrZusatz', $response->getAddress() !== null ? $response->getAddress()->getStreetNumberAddition() : ''),
            new RequestXPath('./af:NameItem/af:Adresszusatz', $response->getAddress() !== null ? $response->getAddress()->getAddressAddition() : ''),
            new RequestXPath('./af:NameItem/af:Zustellhinweis', $response->getAddress() !== null ? $response->getAddress()->getDeliveryInstruction() : ''),

            new RequestXPath('./af:AdrItem/af:Postfiliale/af:Nr', $response->getPostOffice() !== null ? $response->getPostOffice()->getNumber() : ''),
            new RequestXPath('./af:AdrItem/af:Postfiliale/af:Plz', $response->getPostOffice() !== null ? $response->getPostOffice()->getPostalCode() : ''),
            new RequestXPath('./af:AdrItem/af:Postfiliale/af:Ort', $response->getPostOffice() !== null ? $response->getPostOffice()->getCity() : ''),
            new RequestXPath('./af:AdrItem/af:Postfiliale/af:Ortszusatz', $response->getPostOffice() !== null ? $response->getPostOffice()->getCityAddition() : ''),
            new RequestXPath('./af:AdrItem/af:Postfiliale/af:Bundesland', $response->getPostOffice() !== null ? $response->getPostOffice()->getState() : ''),
            new RequestXPath('./af:AdrItem/af:Postfiliale/af:Gemeinde', $response->getPostOffice() !== null ? $response->getPostOffice()->getMunicipality() : ''),
            new RequestXPath('./af:AdrItem/af:Postfiliale/af:Kreis', $response->getPostOffice() !== null ? $response->getPostOffice()->getDistrict() : ''),
            new RequestXPath('./af:AdrItem/af:Postfiliale/af:RegBezirk', $response->getPostOffice() !== null ? $response->getPostOffice()->getRegion() : ''),

            new RequestXPath('./af:AdrItem/af:Postfach/af:Nr', $response->getPostalBox() !== null ? $response->getPostalBox()->getNumber() : ''),
            new RequestXPath('./af:AdrItem/af:Postfach/af:Plz', $response->getPostalBox() !== null ? $response->getPostalBox()->getPostalCode() : ''),
            new RequestXPath('./af:AdrItem/af:Postfach/af:Ort', $response->getPostalBox() !== null ? $response->getPostalBox()->getCity() : ''),
            new RequestXPath('./af:AdrItem/af:Postfach/af:Ortszusatz', $response->getPostalBox() !== null ? $response->getPostalBox()->getCityAddition() : ''),

            new RequestXPath('./af:AdrItem/af:GE/af:Name', $response->getBulkReceiver() !== null ? $response->getBulkReceiver()->getName() : ''),
            new RequestXPath('./af:AdrItem/af:GE/af:Plz', $response->getBulkReceiver() !== null ? $response->getBulkReceiver()->getPostalCode() : ''),
            new RequestXPath('./af:AdrItem/af:GE/af:Ort', $response->getBulkReceiver() !== null ? $response->getBulkReceiver()->getCity() : ''),
            new RequestXPath('./af:AdrItem/af:GE/af:Ortszusatz', $response->getBulkReceiver() !== null ? $response->getBulkReceiver()->getCityAddition() : ''),
            new RequestXPath('./af:AdrItem/af:GE/af:Bundesland', $response->getBulkReceiver() !== null ? $response->getBulkReceiver()->getState() : ''),
            new RequestXPath('./af:AdrItem/af:GE/af:Gemeinde', $response->getBulkReceiver() !== null ? $response->getBulkReceiver()->getMunicipality() : ''),
            new RequestXPath('./af:AdrItem/af:GE/af:Kreis', $response->getBulkReceiver() !== null ? $response->getBulkReceiver()->getDistrict() : ''),
            new RequestXPath('./af:AdrItem/af:GE/af:RegBezirk', $response->getBulkReceiver() !== null ? $response->getBulkReceiver()->getRegion() : ''),

            new RequestXPath('./af:GeoItem/af:KoordWgs84/af:Breite', $response->getGeoData() !== null ? $response->getGeoData()->getLatitude() : ''),
            new RequestXPath('./af:GeoItem/af:KoordWgs84/af:Laenge', $response->getGeoData() !== null ? $response->getGeoData()->getLongitude() : ''),

            new RequestXPath('./af:GeoItem/af:UtmWgs84/af:Ost', $response->getGeoDataUtm() !== null ? $response->getGeoDataUtm()->getEasting() : ''),
            new RequestXPath('./af:GeoItem/af:UtmWgs84/af:Nord', $response->getGeoDataUtm() !== null ? $response->getGeoDataUtm()->getNorthing() : ''),

            new RequestXPath('./af:GeoItem/af:GkbDhdn/af:Rechtswert', $response->getGeoDataGk() !== null ? $response->getGeoDataGk()->getEasting() : ''),
            new RequestXPath('./af:GeoItem/af:GkbDhdn/af:Hochwert', $response->getGeoDataGk() !== null ? $response->getGeoDataGk()->getNorthing() : ''),

            new RequestXPath('./af:AdrItem/af:Hausanschrift/af:Leitdaten/af:Leitcode', $response->getRoutingData() !== null ? $response->getRoutingData()->getRoutingCode() : ''),
            new RequestXPath('./af:AdrItem/af:Hausanschrift/af:Leitdaten/af:Alort', $response->getRoutingData() !== null ? $response->getRoutingData()->getAlOrt() : ''),
            new RequestXPath('./af:AdrItem/af:Hausanschrift/af:Leitdaten/af:Frachtzentrum', $response->getRoutingData() !== null ? $response->getRoutingData()->getCargoCenter() : ''),
            new RequestXPath('./af:AdrItem/af:Hausanschrift/af:Leitdaten/af:StrSchluessel', $response->getRoutingData() !== null ? $response->getRoutingData()->getStreetKey() : ''),
            new RequestXPath('./af:AdrItem/af:Hausanschrift/af:Leitdaten/af:Kgs', $response->getRoutingData() !== null ? $response->getRoutingData()->getDistrictKey() : ''),
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
                fn(PhoneNumberInterface $phone) => $type === $phone->getType()
                    && $areaCode === $phone->getAreaCode()
                    && $dialNumber === $phone->getDialNumber()
            );

            $failureMessage = sprintf('Phone number %s %s (%s) was not mapped.', $areaCode, $dialNumber, $type);
            Assert::assertNotEmpty($match, $failureMessage);
        }
    }
}
