<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Api;

use PostDirekt\Sdk\AddressfactoryDirect\Exception\ServiceException;
use Psr\Log\LoggerInterface;

/**
 * ServiceFactoryInterface
 *
 * @api
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
interface ServiceFactoryInterface
{
    /**
     * Create the address verification service to have address data corrected,
     * enhanced, and any duplicates removed.
     *
     * @param string $username
     * @param string $password
     * @param LoggerInterface $logger
     * @param bool $sandboxMode
     *
     * @return AddressVerificationServiceInterface
     * @throws ServiceException
     */
    public function createAddressFactoryService(
        string $username,
        string $password,
        LoggerInterface $logger,
        bool $sandboxMode = false
    ): AddressVerificationServiceInterface;
}
