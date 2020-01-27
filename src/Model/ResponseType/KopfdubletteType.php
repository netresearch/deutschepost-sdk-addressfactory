<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class KopfdubletteType
{
    /**
     * @var int $fileId
     */
    protected $fileId;

    /**
     * @var int $recordId
     */
    protected $recordId;

    /**
     * @var int $sequenceId
     */
    protected $sequenceId;

    /**
     * @var string $fileType
     */
    protected $fileType;

    /**
     * @return int
     */
    public function getFileId(): int
    {
        return $this->fileId;
    }

    /**
     * @return int
     */
    public function getRecordId(): int
    {
        return $this->recordId;
    }

    /**
     * @return int
     */
    public function getSequenceId(): int
    {
        return $this->sequenceId;
    }

    /**
     * @return string
     */
    public function getFileType(): string
    {
        return $this->fileType;
    }
}
