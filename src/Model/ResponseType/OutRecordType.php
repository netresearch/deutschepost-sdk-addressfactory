<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\RecordType;

class OutRecordType extends RecordType
{
    /**
     * @var MicrodialogItemType $MicrodialogItem
     */
    protected $MicrodialogItem;

    /**
     * @var MoveSourceType $MoveSource
     */
    protected $MoveSource;

    /**
     * @var StatusItemType $StatusItem
     */
    protected $StatusItem;

    /**
     * @var PreisType $Preis
     */
    protected $Preis;

    /**
     * @return MicrodialogItemType
     */
    public function getMicrodialogItem(): MicrodialogItemType
    {
        return $this->MicrodialogItem;
    }

    /**
     * @return MoveSourceType
     */
    public function getMoveSource(): MoveSourceType
    {
        return $this->MoveSource;
    }

    /**
     * @return StatusItemType
     */
    public function getStatusItem(): StatusItemType
    {
        return $this->StatusItem;
    }

    /**
     * @return PreisType
     */
    public function getPreis(): PreisType
    {
        return $this->Preis;
    }
}
