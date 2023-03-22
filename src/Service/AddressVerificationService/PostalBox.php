<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Service\AddressVerificationService;

use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PostalBoxInterface;

class PostalBox implements PostalBoxInterface
{
    public function __construct(
        private readonly string $number = '',
        private readonly string $postalCode = '',
        private readonly string $city = '',
        private readonly string $cityAddition = ''
    ) {
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
