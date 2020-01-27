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
     * @var string|null
     */
    private $sessionId;

    /**
     * @param string|null $sessionId
     * @return CloseSessionRequest
     */
    public function setSessionId(string $sessionId = null): self
    {
        $this->sessionId = $sessionId;
        return $this;
    }
}
