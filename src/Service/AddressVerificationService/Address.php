<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Service\AddressVerificationService;

use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\AddressInterface;

class Address implements AddressInterface
{
    /**
     * @var string
     */
    private $country;

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
     * @var string
     */
    private $urbanDistrict;

    /**
     * @var string
     */
    private $streetName;

    /**
     * @var string
     */
    private $streetNumber;

    /**
     * @var string
     */
    private $streetNumberAddition;

    /**
     * @var string
     */
    private $addressAddition;

    /**
     * @var string
     */
    private $deliveryInstruction;

    /**
     * Address constructor.
     * @param string $country
     * @param string $postalCode
     * @param string $state
     * @param string $region
     * @param string $district
     * @param string $municipality
     * @param string $city
     * @param string $cityAddition
     * @param string $urbanDistrict
     * @param string $streetName
     * @param string $streetNumber
     * @param string $streetNumberAddition
     * @param string $addressAddition
     * @param string $deliveryInstruction
     */
    public function __construct(
        string $country = '',
        string $postalCode = '',
        string $state = '',
        string $region = '',
        string $district = '',
        string $municipality = '',
        string $city = '',
        string $cityAddition = '',
        string $urbanDistrict = '',
        string $streetName = '',
        string $streetNumber = '',
        string $streetNumberAddition = '',
        string $addressAddition = '',
        string $deliveryInstruction = ''
    ) {
        $this->country = $country;
        $this->postalCode = $postalCode;
        $this->state = $state;
        $this->region = $region;
        $this->district = $district;
        $this->municipality = $municipality;
        $this->city = $city;
        $this->cityAddition = $cityAddition;
        $this->urbanDistrict = $urbanDistrict;
        $this->streetName = $streetName;
        $this->streetNumber = $streetNumber;
        $this->streetNumberAddition = $streetNumberAddition;
        $this->addressAddition = $addressAddition;
        $this->deliveryInstruction = $deliveryInstruction;
    }


    public function getCountry(): string
    {
        return $this->country;
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

    public function getUrbanDistrict(): string
    {
        return $this->urbanDistrict;
    }

    public function getStreetName(): string
    {
        return $this->streetName;
    }

    public function getStreetNumber(): string
    {
        return $this->streetNumber;
    }

    public function getStreetNumberAddition(): string
    {
        return $this->streetNumberAddition;
    }

    public function getAddressAddition(): string
    {
        return $this->addressAddition;
    }

    public function getDeliveryInstruction(): string
    {
        return $this->deliveryInstruction;
    }
}
