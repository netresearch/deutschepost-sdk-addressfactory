<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Api\Data;

/**
 * @api
 */
interface GeoDataInterface
{
    /**
     * Get the latitude (World Geodetic System 1984).
     */
    public function getLatitude(): string;

    public function getLongitude(): string;
}
