<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class OutRecordWSType extends OutRecordType
{
    /**
     * @var string
     */
    private string $icdTrefferKz;

    public function getIcdTrefferKz(): string
    {
        return $this->icdTrefferKz;
    }
}
