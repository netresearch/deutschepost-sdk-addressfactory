<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Service\AddressVerificationService;

use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PackstationInterface;

class Packstation implements PackstationInterface
{
    /**
     * @var string
     */
    private $number;

    /**
     * @var string
     */
    private $postalCode;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $region;

    /**
     * @var string
     */
    private $district;

    /**
     * @var string
     */
    private $municipality;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $cityAddition;

    /**
     * Packstation constructor.
     *
     * @param string $number
     * @param string $postalCode
     * @param string $state
     * @param string $region
     * @param string $district
     * @param string $municipality
     * @param string $city
     * @param string $cityAddition
     */
    public function __construct(
        string $number = '',
        string $postalCode = '',
        string $state = '',
        string $region = '',
        string $district = '',
        string $municipality = '',
        string $city = '',
        string $cityAddition = ''
    ) {
        $this->number = $number;
        $this->postalCode = $postalCode;
        $this->state = $state;
        $this->region = $region;
        $this->district = $district;
        $this->municipality = $municipality;
        $this->city = $city;
        $this->cityAddition = $cityAddition;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function getRegion(): string
    {
        return $this->region;
    }

    public function getDistrict(): string
    {
        return $this->district;
    }

    public function getMunicipality(): string
    {
        return $this->municipality;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getCityAddition(): string
    {
        return $this->cityAddition;
    }
}
