<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Service\AddressVerificationService;

use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\RoutingDataInterface;

class RoutingData implements RoutingDataInterface
{
    public function __construct(
        private readonly string $routingCode,
        private readonly string $alOrt,
        private readonly string $cargoCenter,
        private readonly string $streetKey,
        private readonly string $districtKey
    ) {
    }

    public function getRoutingCode(): string
    {
        return $this->routingCode;
    }

    public function getAlOrt(): string
    {
        return $this->alOrt;
    }

    public function getCargoCenter(): string
    {
        return $this->cargoCenter;
    }

    public function getStreetKey(): string
    {
        return $this->streetKey;
    }

    public function getDistrictKey(): string
    {
        return $this->districtKey;
    }
}
