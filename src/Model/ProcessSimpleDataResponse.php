<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model;

use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\OutRecordWSType;

class ProcessSimpleDataResponse
{
    /**
     * @var OutRecordWSType
     */
    private $outRecord;

    /**
     * @return OutRecordWSType
     */
    public function getOutRecord(): OutRecordWSType
    {
        return $this->outRecord;
    }
}
