<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Service\AddressVerificationService;

use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PhoneNumberInterface;

class PhoneNumber implements PhoneNumberInterface
{
    public function __construct(
        private readonly string $type,
        private readonly string $areaCode,
        private readonly string $dialNumber
    ) {
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getAreaCode(): string
    {
        return $this->areaCode;
    }

    public function getDialNumber(): string
    {
        return $this->dialNumber;
    }
}
