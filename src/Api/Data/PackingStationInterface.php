<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Api\Data;

/**
 * Interface PackingStationInterface
 *
 * @api
 */
interface PackingStationInterface
{
    /**
     * @return string
     */
    public function getNumber(): string;

    /**
     * @return string
     */
    public function getPostalCode(): string;

    /**
     * @return string
     */
    public function getState(): string;

    /**
     * @return string
     */
    public function getRegion(): string;

    /**
     * @return string
     */
    public function getDistrict(): string;

    /**
     * @return string
     */
    public function getMunicipality(): string;

    /**
     * @return string
     */
    public function getCity(): string;

    /**
     * @return string
     */
    public function getCityAddition(): string;
}
