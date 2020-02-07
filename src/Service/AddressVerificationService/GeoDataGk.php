<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Service\AddressVerificationService;

use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\GeoDataGkInterface;

/**
 * GeoDataGk
 *
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class GeoDataGk implements GeoDataGkInterface
{
    /**
     * @var string
     */
    private $northing;

    /**
     * @var string
     */
    private $easting;

    /**
     * GeoDataGk constructor.
     *
     * @param string $northing
     * @param string $easting
     */
    public function __construct(
        string $northing,
        string $easting
    ) {
        $this->northing = $northing;
        $this->easting = $easting;
    }

    /**
     * @return string
     */
    public function getNorthing(): string
    {
        return $this->northing;
    }

    /**
     * @return string
     */
    public function getEasting(): string
    {
        return $this->easting;
    }
}
