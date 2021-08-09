<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Api\Data;

/**
 * @api
 */
interface PostalBoxInterface
{
    public function getNumber(): string;

    public function getPostalCode(): string;

    public function getCity(): string;

    public function getCityAddition(): string;
}
