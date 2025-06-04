<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class RecordType
{
    protected int $recordId;

    protected ?int $sequenceId = null;

    protected ?int $fileId = null;

    /**
     * One of: Merge, Purge
     */
    protected ?string $fileType = null;

    protected ?NameItemType $NameItem = null;

    protected ?AdrItemType $AdrItem = null;

    protected ?RufnrItemType $RufnrItem = null;

    protected ?GeoItemType $GeoItem = null;

    protected ?ExtFieldItemType $ExtFieldItem = null;

    public function __construct(int $recordId)
    {
        $this->recordId = $recordId;
    }

    public function getRecordId(): int
    {
        return $this->recordId;
    }

    public function getSequenceId(): ?int
    {
        return $this->sequenceId;
    }

    public function setSequenceId(int $sequenceId): RecordType
    {
        $this->sequenceId = $sequenceId;
        return $this;
    }

    public function getFileId(): ?int
    {
        return $this->fileId;
    }

    public function setFileId(int $fileId): RecordType
    {
        $this->fileId = $fileId;
        return $this;
    }

    public function getFileType(): string
    {
        return (string) $this->fileType;
    }

    public function setFileType(string $fileType): RecordType
    {
        $this->fileType = $fileType;
        return $this;
    }

    public function getNameItem(): ?NameItemType
    {
        return $this->NameItem;
    }

    public function setNameItem(NameItemType $NameItem): RecordType
    {
        $this->NameItem = $NameItem;
        return $this;
    }

    public function getAdrItem(): ?AdrItemType
    {
        return $this->AdrItem;
    }

    public function setAdrItem(AdrItemType $AdrItem): RecordType
    {
        $this->AdrItem = $AdrItem;
        return $this;
    }

    public function getRufnrItem(): ?RufnrItemType
    {
        return $this->RufnrItem;
    }

    public function setRufnrItem(RufnrItemType $RufnrItem): RecordType
    {
        $this->RufnrItem = $RufnrItem;
        return $this;
    }

    public function getGeoItem(): ?GeoItemType
    {
        return $this->GeoItem;
    }

    public function setGeoItem(GeoItemType $GeoItem): RecordType
    {
        $this->GeoItem = $GeoItem;
        return $this;
    }

    public function getExtFieldItem(): ?ExtFieldItemType
    {
        return $this->ExtFieldItem;
    }

    public function setExtFieldItem(ExtFieldItemType $ExtFieldItem): RecordType
    {
        $this->ExtFieldItem = $ExtFieldItem;
        return $this;
    }
}
