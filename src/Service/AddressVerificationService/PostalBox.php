<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Service\AddressVerificationService;

use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PostalBoxInterface;

class PostalBox implements PostalBoxInterface
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
    private $city;

    /**
     * @var string
     */
    private $cityAddition;

    /**
     * @param string $number
     * @param string $postalCode
     * @param string $city
     * @param string $cityAddition
     */
    public function __construct(
        string $number = '',
        string $postalCode = '',
        string $city = '',
        string $cityAddition = ''
    ) {
        $this->number = $number;
        $this->postalCode = $postalCode;
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

    public function getCity(): string
    {
        return $this->city;
    }

    public function getCityAddition(): string
    {
        return $this->cityAddition;
    }
}
