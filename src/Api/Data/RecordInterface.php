<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Api\Data;

/**
 * Interface RecordInterface
 *
 * @api
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
interface RecordInterface
{
    /**
     * @return int
     */
    public function getRecordId(): int;

    /**
     * @return PersonInterface|null
     */
    public function getPerson(): ?PersonInterface;

    /**
     * @return AddressInterface|null
     */
    public function getAddress(): ?AddressInterface;

    /**
     * @return GeoDataInterface|null
     */
    public function getGeoData(): ?GeoDataInterface;

    /**
     * @return GeoDataUtmInterface|null
     */
    public function getGeoDataUtm(): ?GeoDataUtmInterface;

    /**
     * @return GeoDataGkInterface|null
     */
    public function getGeoDataGk(): ?GeoDataGkInterface;

    /**
     * @return RoutingDataInterface|null
     */
    public function getRoutingData(): ?RoutingDataInterface;

    /**
     * @return PhoneNumberInterface[]
     */
    public function getPhoneNumbers(): array;

    /**
     * @return string[]
     */
    public function getStatusCodes(): array;

    /**
     * @return PackingStationInterface|null
     */
    public function getPackingStation(): ?PackingStationInterface;
}
