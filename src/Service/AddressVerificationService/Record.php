<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Service\AddressVerificationService;

use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\AddressInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\BulkReceiverInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\GeoDataGkInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\GeoDataInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\GeoDataUtmInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\ParcelStationInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PersonInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PhoneNumberInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PostalBoxInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PostOfficeInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\RecordInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\RoutingDataInterface;

class Record implements RecordInterface
{
    /**
     * Record constructor.
     *
     * @param PhoneNumberInterface[] $phoneNumbers
     * @param string[] $statusCodes
     */
    public function __construct(
        private readonly int $recordId,
        private readonly ?PersonInterface $person = null,
        private readonly ?AddressInterface $address = null,
        private readonly ?ParcelStationInterface $parcelStation = null,
        private readonly ?PostOfficeInterface $postOffice = null,
        private readonly ?PostalBoxInterface $postalBox = null,
        private readonly ?BulkReceiverInterface $bulkReceiver = null,
        private readonly ?GeoDataInterface $geoData = null,
        private readonly ?GeoDataUtmInterface $geoDataUtm = null,
        private readonly ?GeoDataGkInterface $geoDataGk = null,
        private readonly ?RoutingDataInterface $routingData = null,
        private readonly array $phoneNumbers = [],
        private readonly array $statusCodes = []
    ) {
    }

    public function getRecordId(): int
    {
        return $this->recordId;
    }

    public function getPerson(): ?PersonInterface
    {
        return $this->person;
    }

    public function getAddress(): ?AddressInterface
    {
        return $this->address;
    }

    public function getGeoData(): ?GeoDataInterface
    {
        return $this->geoData;
    }

    public function getGeoDataUtm(): ?GeoDataUtmInterface
    {
        return $this->geoDataUtm;
    }

    public function getGeoDataGk(): ?GeoDataGkInterface
    {
        return $this->geoDataGk;
    }

    public function getRoutingData(): ?RoutingDataInterface
    {
        return $this->routingData;
    }

    public function getPhoneNumbers(): array
    {
        return $this->phoneNumbers;
    }

    public function getStatusCodes(): array
    {
        return $this->statusCodes;
    }

    public function getParcelStation(): ?ParcelStationInterface
    {
        return $this->parcelStation;
    }

    public function getPostOffice(): ?PostOfficeInterface
    {
        return $this->postOffice;
    }

    public function getPostalBox(): ?PostalBoxInterface
    {
        return $this->postalBox;
    }

    public function getBulkReceiver(): ?BulkReceiverInterface
    {
        return $this->bulkReceiver;
    }
}
