<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model;

/**
 * CloseSessionRequest
 *
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class CloseSessionRequest
{
    /**
     * The session id.
     *
     * @var string
     */
    private $sessionId;

    /**
     * @param string $sessionId
     * @return CloseSessionRequest
     */
    public function setSessionId(string $sessionId): self
    {
        $this->sessionId = $sessionId;
        return $this;
    }
}
