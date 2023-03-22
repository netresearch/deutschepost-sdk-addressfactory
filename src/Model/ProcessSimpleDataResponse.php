<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model;

use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\OutRecordWSType;

class ProcessSimpleDataResponse
{
    private OutRecordWSType $outRecord;

    public function getOutRecord(): OutRecordWSType
    {
        return $this->outRecord;
    }
}
