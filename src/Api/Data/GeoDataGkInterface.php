<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Api\Data;

/**
 * Interface GeoDataGkInterface
 *
 * @api
 */
interface GeoDataGkInterface
{
    /**
     * Get the northing value in the Gauss–Krüger coordinate system.
     *
     * @return string
     */
    public function getNorthing(): string;

    /**
     * Get the easting value in the Gauss–Krüger coordinate system.
     *
     * @return string
     */
    public function getEasting(): string;
}
