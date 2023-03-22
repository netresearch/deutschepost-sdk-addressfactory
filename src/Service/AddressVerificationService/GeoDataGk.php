<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Service\AddressVerificationService;

use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\GeoDataGkInterface;

class GeoDataGk implements GeoDataGkInterface
{
    public function __construct(private readonly string $northing, private readonly string $easting)
    {
    }

    public function getNorthing(): string
    {
        return $this->northing;
    }

    public function getEasting(): string
    {
        return $this->easting;
    }
}
