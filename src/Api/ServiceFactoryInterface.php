<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Api;

use PostDirekt\Sdk\AddressfactoryDirect\Exception\ServiceException;
use Psr\Log\LoggerInterface;

/**
 * @api
 */
interface ServiceFactoryInterface
{
    /**
     * Create the address verification service to have address data corrected,
     * enhanced, and any duplicates removed.
     *
     * @throws ServiceException
     */
    public function createAddressVerificationService(
        string $username,
        string $password,
        LoggerInterface $logger,
        bool $sandboxMode = false
    ): AddressVerificationServiceInterface;
}
