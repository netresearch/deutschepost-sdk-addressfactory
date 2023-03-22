<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Service\AddressVerificationService;

use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PostOfficeInterface;

class PostOffice implements PostOfficeInterface
{
    public function __construct(
        private readonly string $number = '',
        private readonly string $postalCode = '',
        private readonly string $state = '',
        private readonly string $region = '',
        private readonly string $district = '',
        private readonly string $municipality = '',
        private readonly string $city = '',
        private readonly string $cityAddition = ''
    ) {
    }

    public function getNumber(): string
    {
        return $this->number;
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
}
