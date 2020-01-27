<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class VerschiebungType extends VerschiebungRestriction
{
    /**
     * @var Quelle[] $Quelle
     */
    protected $Quelle;

    /**
     * @return Quelle[]
     */
    public function getQuelle(): array
    {
        return $this->Quelle;
    }
}
