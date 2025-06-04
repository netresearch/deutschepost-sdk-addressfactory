<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class KorrekturType extends AttributBearbeitungRestriction
{
    private bool $signifikant;

    public function getSignifikant(): bool
    {
        return $this->signifikant;
    }
}
