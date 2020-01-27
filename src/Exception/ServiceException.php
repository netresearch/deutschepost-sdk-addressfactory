<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Exception;

/**
 * Class ServiceException
 *
 * Generic SDK exception, can be used to catch any SDK exception
 * in cases where the exact type does not matter. Exception messages
 * are suitable for logging.
 *
 * @api
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class ServiceException extends \Exception
{
}
