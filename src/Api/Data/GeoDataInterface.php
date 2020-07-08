<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Api\Data;

/**
 * Interface GeoDataInterface
 *
 * @api
 */
interface GeoDataInterface
{
    /**
     * Get the latitude (World Geodetic System 1984).
     *
     * @return string
     */
    public function getLatitude(): string;

    /**
     * Get the longitude (World Geodetic System 1984).
     *
     * @return string
     */
    public function getLongitude(): string;
}
