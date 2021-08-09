<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Api\Data;

/**
 * @api
 */
interface ParcelStationInterface
{
    public function getNumber(): string;

    public function getPostalCode(): string;

    public function getState(): string;

    public function getRegion(): string;

    public function getDistrict(): string;

    public function getMunicipality(): string;

    public function getCity(): string;

    public function getCityAddition(): string;
}
