<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model;

use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\OutRecordWSType;

class ProcessDataResponse
{
    /**
     * Depending on the SOAP_SINGLE_ELEMENT_ARRAYS setting, this may either be an object or an array of object(s).
     *
     * @var OutRecordWSType[]|OutRecordWSType
     */
    private $outRecord;

    /**
     * @return OutRecordWSType[]
     */
    public function getOutRecord(): array
    {
        if ($this->outRecord instanceof OutRecordWSType) {
            return [$this->outRecord];
        }

        return $this->outRecord;
    }
}
