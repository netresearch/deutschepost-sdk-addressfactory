<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Api;

use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\RecordInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Exception\AuthenticationException;
use PostDirekt\Sdk\AddressfactoryDirect\Exception\ServiceException;

/**
 * Interface AddressVerificationServiceInterface
 *
 * @api
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
interface AddressVerificationServiceInterface
{
    /**
     * The "openSession" operation is used to generate a new session id used within any subsequent webservice call.
     *
     * @param string $configName    The name of a configuration created by Deutsche Post Direkt
     * @param string|null $clientId Optionally, the client id parameter can be used to determine which clients are
     *                              to be compared. You receive the client id from Deutsche Post Direkt GmbH.
     *
     * @return string
     *
     * @throws AuthenticationException
     * @throws ServiceException
     */
    public function openSession(string $configName, string $clientId = null): string;

    /**
     * The operation "closeSession" closes a previously with "openSession" created session instance.
     *
     * @param string $sessionId The id of the session to close
     *
     * @return void
     *
     * @throws AuthenticationException
     * @throws ServiceException
     */
    public function closeSession(string $sessionId): void;

    /**
     * Perform an address search based on flat address parameters.
     *
     * @param string $lastName
     * @param string $firstName
     * @param string $street
     * @param string $houseNumber
     * @param string $postalCode
     * @param string $city
     * @param string|null $sessionId
     * @param string|null $configName
     * @param string|null $clientId
     *
     * @return RecordInterface
     *
     * @throws AuthenticationException
     * @throws ServiceException
     */
    public function getRecordByAddress(
        string $postalCode = '',
        string $city = '',
        string $street = '',
        string $houseNumber = '',
        string $lastName = '',
        string $firstName = '',
        string $sessionId = null,
        string $configName = null,
        string $clientId = null
    ): RecordInterface;

    /**
     * Perform a verification for one or multiple complex address definitions.
     *
     * @see RequestBuilderInterface
     *
     * @param mixed[] $records
     * @param string|null $sessionId The id of the session to close
     * @param string|null $configName
     * @param string|null $clientId
     *
     * @return RecordInterface[]
     *
     * @throws AuthenticationException
     * @throws ServiceException
     */
    public function getRecords(
        array $records,
        string $sessionId = null,
        string $configName = null,
        string $clientId = null
    ): array;
}
