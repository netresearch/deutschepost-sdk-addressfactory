<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class KorrekturType extends AttributBearbeitungRestriction
{
    /**
     * @var boolean $signifikant
     */
    protected $signifikant;

    /**
     * @return boolean
     */
    public function getSignifikant(): bool
    {
        return $this->signifikant;
    }
}
