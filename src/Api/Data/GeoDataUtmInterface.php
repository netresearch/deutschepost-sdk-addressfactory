<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Api\Data;

/**
 * Interface GeoDataUtmInterface
 *
 * @api
 */
interface GeoDataUtmInterface
{
    /**
     * Get the north value in the Universal Transverse Mercator coordinate system.
     *
     * @return string
     */
    public function getNorthing(): string;

    /**
     * Get the east value in the Universal Transverse Mercator coordinate system.
     *
     * @return string
     */
    public function getEasting(): string;
}
