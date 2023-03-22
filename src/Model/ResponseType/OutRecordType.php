<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\RecordType;

class OutRecordType extends RecordType
{
    protected MicrodialogItemType $MicrodialogItem;

    protected MoveSourceType $MoveSource;

    protected StatusItemType $StatusItem;

    protected PreisType $Preis;

    public function getMicrodialogItem(): MicrodialogItemType
    {
        return $this->MicrodialogItem;
    }

    public function getMoveSource(): MoveSourceType
    {
        return $this->MoveSource;
    }

    public function getStatusItem(): StatusItemType
    {
        return $this->StatusItem;
    }

    public function getPreis(): PreisType
    {
        return $this->Preis;
    }
}
