<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Api\Data;

/**
 * Interface AddressInterface
 *
 * @api
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
interface AddressInterface
{
    /**
     * @return string
     */
    public function getCountry(): string;

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

    /**
     * @return string
     */
    public function getUrbanDistrict(): string;

    /**
     * @return string
     */
    public function getStreetName(): string;

    /**
     * @return string
     */
    public function getStreetNumber(): string;

    /**
     * @return string
     */
    public function getStreetNumberAddition(): string;

    /**
     * @return string
     */
    public function getAddressAddition(): string;

    /**
     * @return string
     */
    public function getDeliveryInstruction(): string;
}
