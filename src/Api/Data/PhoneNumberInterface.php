<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Api\Data;

/**
 * @api
 */
interface PhoneNumberInterface
{
    public const TYPE_UNKNOWN = 'unknown';
    public const TYPE_PRIVATE = 'private';
    public const TYPE_BUSINESS = 'business';
    public const TYPE_MOBILE = 'mobile';
    public const TYPE_FAX = 'fax';

    public function getType(): string;

    public function getAreaCode(): string;

    public function getDialNumber(): string;
}
