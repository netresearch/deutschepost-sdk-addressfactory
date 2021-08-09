<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Api\Data;

/**
 * @api
 */
interface GeoDataUtmInterface
{
    /**
     * Get the north value in the Universal Transverse Mercator coordinate system.
     */
    public function getNorthing(): string;

    /**
     * Get the east value in the Universal Transverse Mercator coordinate system.
     */
    public function getEasting(): string;
}
