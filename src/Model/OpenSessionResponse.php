<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model;

class OpenSessionResponse
{
    private string $sessionId;

    public function getSessionId(): string
    {
        return $this->sessionId;
    }
}
