<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Api\Data;

/**
 * @api
 */
interface RecordInterface
{
    public function getRecordId(): int;

    public function getPerson(): ?PersonInterface;

    public function getAddress(): ?AddressInterface;

    public function getParcelStation(): ?ParcelStationInterface;

    public function getGeoData(): ?GeoDataInterface;

    public function getGeoDataUtm(): ?GeoDataUtmInterface;

    public function getGeoDataGk(): ?GeoDataGkInterface;

    public function getRoutingData(): ?RoutingDataInterface;

    /**
     * @return PhoneNumberInterface[]
     */
    public function getPhoneNumbers(): array;

    /**
     * @return string[]
     */
    public function getStatusCodes(): array;

    public function getPostOffice(): ?PostOfficeInterface;

    public function getPostalBox(): ?PostalBoxInterface;

    public function getBulkReceiver(): ?BulkReceiverInterface;
}
