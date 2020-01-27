<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model;

use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\OutRecordWSType;

/**
 * ProcessDataResponse
 *
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class ProcessDataResponse
{
    /**
     * @var OutRecordWSType[]
     */
    private $outRecord;

    /**
     * @return OutRecordWSType[]
     */
    public function getOutRecord(): array
    {
        return $this->outRecord;
    }
}
