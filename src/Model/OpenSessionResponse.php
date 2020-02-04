<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model;

/**
 * OpenSessionResponse
 *
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class OpenSessionResponse
{
    /**
     * @var string
     */
    private $sessionId;

    /**
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }
}
