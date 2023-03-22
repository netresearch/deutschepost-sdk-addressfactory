<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Service\AddressVerificationService;

use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\AddressInterface;

class Address implements AddressInterface
{
    public function __construct(
        private readonly string $country = '',
        private readonly string $postalCode = '',
        private readonly string $state = '',
        private readonly string $region = '',
        private readonly string $district = '',
        private readonly string $municipality = '',
        private readonly string $city = '',
        private readonly string $cityAddition = '',
        private readonly string $urbanDistrict = '',
        private readonly string $streetName = '',
        private readonly string $streetNumber = '',
        private readonly string $streetNumberAddition = '',
        private readonly string $addressAddition = '',
        private readonly string $deliveryInstruction = ''
    ) {
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function getRegion(): string
    {
        return $this->region;
    }

    public function getDistrict(): string
    {
        return $this->district;
    }

    public function getMunicipality(): string
    {
        return $this->municipality;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getCityAddition(): string
    {
        return $this->cityAddition;
    }

    public function getUrbanDistrict(): string
    {
        return $this->urbanDistrict;
    }

    public function getStreetName(): string
    {
        return $this->streetName;
    }

    public function getStreetNumber(): string
    {
        return $this->streetNumber;
    }

    public function getStreetNumberAddition(): string
    {
        return $this->streetNumberAddition;
    }

    public function getAddressAddition(): string
    {
        return $this->addressAddition;
    }

    public function getDeliveryInstruction(): string
    {
        return $this->deliveryInstruction;
    }
}
