<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Service\AddressVerificationService;

use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PhoneNumberInterface;

/**
 * PhoneNumber
 *
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class PhoneNumber implements PhoneNumberInterface
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $areaCode;

    /**
     * @var string
     */
    private $dialNumber;

    /**
     * PhoneNumber constructor.
     *
     * @param string $type
     * @param string $areaCode
     * @param string $dialNumber
     */
    public function __construct(string $type, string $areaCode, string $dialNumber)
    {
        $this->type = $type;
        $this->areaCode = $areaCode;
        $this->dialNumber = $dialNumber;
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
