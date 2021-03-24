<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Service\AddressVerificationService;

use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\AddressInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\GeoDataGkInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\GeoDataInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\GeoDataUtmInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PackingStationInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PersonInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PhoneNumberInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\RecordInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\RoutingDataInterface;

/**
 * Record
 *
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class Record implements RecordInterface
{
    /**
     * @var int
     */
    private $recordId;

    /**
     * @var PersonInterface|null
     */
    private $person;

    /**
     * @var AddressInterface|null
     */
    private $address;

    /**
     * @var PackingStationInterface|null
     */
    private $packingStation;

    /**
     * @var GeoDataInterface|null
     */
    private $geoData;

    /**
     * @var GeoDataUtmInterface|null
     */
    private $geoDataUtm;

    /**
     * @var GeoDataGkInterface|null
     */
    private $geoDataGk;

    /**
     * @var RoutingDataInterface|null
     */
    private $routingData;

    /**
     * @var PhoneNumberInterface[]
     */
    private $phoneNumbers;

    /**
     * @var string[]
     */
    private $statusCodes;

    /**
     * Record constructor.
     *
     * @param int $recordId
     * @param PersonInterface|null $person
     * @param AddressInterface|null $address
     * @param PackingStationInterface|null $packingStation
     * @param GeoDataInterface|null $geoData
     * @param GeoDataUtmInterface|null $geoDataUtm
     * @param GeoDataGkInterface|null $geoDataGk
     * @param RoutingDataInterface|null $routingData
     * @param PhoneNumberInterface[] $phoneNumbers
     * @param string[] $statusCodes
     */
    public function __construct(
        int $recordId,
        PersonInterface $person = null,
        AddressInterface $address = null,
        PackingStationInterface $packingStation = null,
        GeoDataInterface $geoData = null,
        GeoDataUtmInterface $geoDataUtm = null,
        GeoDataGkInterface $geoDataGk = null,
        RoutingDataInterface $routingData = null,
        array $phoneNumbers = [],
        array $statusCodes = []
    ) {
        $this->recordId = $recordId;
        $this->person = $person;
        $this->address = $address;
        $this->geoData = $geoData;
        $this->geoDataUtm = $geoDataUtm;
        $this->geoDataGk = $geoDataGk;
        $this->routingData = $routingData;
        $this->phoneNumbers = $phoneNumbers;
        $this->statusCodes = $statusCodes;
        $this->packingStation = $packingStation;
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

    public function getPackingStation(): ?PackingStationInterface
    {
        return $this->packingStation;
    }
}
