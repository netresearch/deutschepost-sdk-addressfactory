<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class KopfdubletteType
{
    private int $fileId;

    private int $recordId;

    private int $sequenceId;

    private string $fileType;

    public function getFileId(): int
    {
        return $this->fileId;
    }

    public function getRecordId(): int
    {
        return $this->recordId;
    }

    public function getSequenceId(): int
    {
        return $this->sequenceId;
    }

    public function getFileType(): string
    {
        return $this->fileType;
    }
}
