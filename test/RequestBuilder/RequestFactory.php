<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Test\RequestBuilder;

use PostDirekt\Sdk\AddressfactoryDirect\Api\RequestBuilderInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Model\RequestType\InRecordWSType;
use PostDirekt\Sdk\AddressfactoryDirect\Test\TestDouble\RecordStub;

/**
 * Class RequestBuilder
 *
 * @author Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class RequestFactory
{
    /**
     * @var RequestBuilderInterface
     */
    private $requestBuilder;

    /**
     * RequestFactory constructor.
     *
     * @param RequestBuilderInterface $requestBuilder
     */
    public function __construct(RequestBuilderInterface $requestBuilder)
    {
        $this->requestBuilder = $requestBuilder;
    }

    public function create(RecordStub $data): InRecordWSType
    {
        $this->requestBuilder->setMetadata(
            $data->getRecordId(),
            $data->getFileType(),
            $data->getFileId(),
            $data->getSequenceId()
        );

        $this->requestBuilder->setPerson(
            $data->getFirstName(),
            $data->getLastName(),
            $data->getSalutation(),
            [
                $data->getCompany1(),
                $data->getCompany2(),
                $data->getCompany3(),
            ],
            $data->getPrefix(),
            $data->getSuffix(),
            $data->getAcademicTitle(),
            $data->getTitleOfNobility(),
            $data->getGender()
        );

        $this->requestBuilder->addPhoneNumber(
            $data->getBusinessPhoneAreaCode(),
            $data->getBusinessPhoneDialNumber(),
            $data->getBusinessPhoneType()
        );

        $this->requestBuilder->addPhoneNumber(
            $data->getMobilePhoneAreaCode(),
            $data->getMobilePhoneDialNumber(),
            $data->getMobilePhoneType()
        );

        $this->requestBuilder->setPersonPostNumber($data->getPostNumber());

        $this->requestBuilder->setCreditRatingInquiry($data->getDateOfBirth(), $data->getInquiryReason());

        $this->requestBuilder->setAddress(
            $data->getCountry(),
            $data->getPostalCode(),
            $data->getCity(),
            $data->getStreetName(),
            $data->getStreetNumber(),
            $data->getState(),
            $data->getAddressAddition(),
            $data->getDeliveryInstruction()
        );

        $this->requestBuilder->setAddressDetails(
            $data->getStreetNumberAddition(),
            $data->getCityAddition(),
            $data->getUrbanDistrict(),
            $data->getMunicipality(),
            $data->getDistrict(),
            $data->getRegion()
        );

        $this->requestBuilder->setAddressRoutingData(
            $data->getRoutingCode(),
            $data->getAlOrt(),
            $data->getCargoCenter(),
            $data->getStreetKey(),
            $data->getDistrictKey()
        );

        $this->requestBuilder->setCoordinates($data->getGeoLat(), $data->getGeoLng());
        $this->requestBuilder->setCoordinatesUtm($data->getGeoUtmNorthing(), $data->getGeoUtmEasting());
        $this->requestBuilder->setCoordinatesGk($data->getGeoGkNorthing(), $data->getGeoGkEasting());

        // Postfach
        $this->requestBuilder->setPostfach(
            $data->getPostfachNumber(),
            $data->getPostfachPostalCode(),
            $data->getPostfachCity(),
            $data->getPostfachCityAddition()
        );

        $this->requestBuilder->setPostfachRoutingData(
            $data->getPostfachRoutingCode(),
            $data->getPostfachAlOrt(),
            $data->getPostfachCargoCenter(),
            $data->getPostfachStreetKey(),
            $data->getPostfachDistrictKey()
        );

        // Packstation
        $this->requestBuilder->setPackstation(
            $data->getPackstationNumber(),
            $data->getPackstationPostalCode(),
            $data->getPackstationCity(),
            $data->getPackstationCityAddition(),
            $data->getPackstationState(),
            $data->getPackstationMunicipality(),
            $data->getPackstationDistrict(),
            $data->getPackstationRegion()
        );

        $this->requestBuilder->setPackstationRoutingData(
            $data->getPackstationRoutingCode(),
            $data->getPackstationAlOrt(),
            $data->getPackstationCargoCenter(),
            $data->getPackstationStreetKey(),
            $data->getPackstationDistrictKey()
        );

        // Postfiliale
        $this->requestBuilder->setPostfiliale(
            $data->getPostfilialeNumber(),
            $data->getPostfilialePostalCode(),
            $data->getPostfilialeCity(),
            $data->getPostfilialeCityAddition(),
            $data->getPostfilialeState(),
            $data->getPostfilialeMunicipality(),
            $data->getPostfilialeDistrict(),
            $data->getPostfilialeRegion()
        );

        $this->requestBuilder->setPostfilialeRoutingData(
            $data->getPostfilialeRoutingCode(),
            $data->getPostfilialeAlOrt(),
            $data->getPostfilialeCargoCenter(),
            $data->getPostfilialeStreetKey(),
            $data->getPostfilialeDistrictKey()
        );

        // Großempfänger
        $this->requestBuilder->setCorporateAddress(
            $data->getCorporateAddressName(),
            $data->getCorporateAddressPostalCode(),
            $data->getCorporateAddressCity(),
            $data->getCorporateAddressCityAddition(),
            $data->getCorporateAddressState(),
            $data->getCorporateAddressMunicipality(),
            $data->getCorporateAddressDistrict(),
            $data->getCorporateAddressRegion()
        );

        $this->requestBuilder->setCorporateAddressRoutingData(
            $data->getCorporateAddressRoutingCode(),
            $data->getCorporateAddressAlOrt(),
            $data->getCorporateAddressCargoCenter(),
            $data->getCorporateAddressStreetKey(),
            $data->getCorporateAddressDistrictKey()
        );

        $this->requestBuilder->addExtendedField($data->getOrderIdKey(), $data->getOrderIdValue());
        $this->requestBuilder->addExtendedField($data->getAddressIdKey(), $data->getAddressIdValue());

        return $this->requestBuilder->create();
    }
}
