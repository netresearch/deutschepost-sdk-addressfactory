<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Api\Data;

/**
 * Interface PhoneNumberInterface
 *
 * @api
 */
interface PhoneNumberInterface
{
    public const TYPE_UNKNOWN = 'unknown';
    public const TYPE_PRIVATE = 'private';
    public const TYPE_BUSINESS = 'business';
    public const TYPE_MOBILE = 'mobile';
    public const TYPE_FAX = 'fax';

    /**
     * @return string
     */
    public function getType(): string;

    /**
     * @return string
     */
    public function getAreaCode(): string;

    /**
     * @return string
     */
    public function getDialNumber(): string;
}
