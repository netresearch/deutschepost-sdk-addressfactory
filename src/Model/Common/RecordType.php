<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class RecordType
{
    /**
     * @var int $recordId
     */
    protected $recordId;

    /**
     * @var int|null $sequenceId
     */
    protected $sequenceId;

    /**
     * @var int|null $fileId
     */
    protected $fileId;

    /**
     * One of: Merge, Purge
     *
     * @var string|null $fileType
     */
    protected $fileType;

    /**
     * @var NameItemType|null $NameItem
     */
    protected $NameItem;

    /**
     * @var AdrItemType|null $AdrItem
     */
    protected $AdrItem;

    /**
     * @var RufnrItemType|null $RufnrItem
     */
    protected $RufnrItem;

    /**
     * @var GeoItemType|null $GeoItem
     */
    protected $GeoItem;

    /**
     * @var ExtFieldItemType|null $ExtFieldItem
     */
    protected $ExtFieldItem;

    /**
     * @param int $recordId
     */
    public function __construct(int $recordId)
    {
        $this->recordId = $recordId;
    }

    /**
     * @return int
     */
    public function getRecordId(): int
    {
        return $this->recordId;
    }

    /**
     * @return int|null
     */
    public function getSequenceId(): ?int
    {
        return $this->sequenceId;
    }

    /**
     * @param int $sequenceId
     *
     * @return RecordType
     */
    public function setSequenceId(int $sequenceId): RecordType
    {
        $this->sequenceId = $sequenceId;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getFileId(): ?int
    {
        return $this->fileId;
    }

    /**
     * @param int $fileId
     *
     * @return RecordType
     */
    public function setFileId(int $fileId): RecordType
    {
        $this->fileId = $fileId;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileType(): string
    {
        return (string) $this->fileType;
    }

    /**
     * @param string $fileType
     *
     * @return RecordType
     */
    public function setFileType(string $fileType): RecordType
    {
        $this->fileType = $fileType;
        return $this;
    }

    /**
     * @return NameItemType|null
     */
    public function getNameItem(): ?NameItemType
    {
        return $this->NameItem;
    }

    /**
     * @param NameItemType $NameItem
     *
     * @return RecordType
     */
    public function setNameItem(NameItemType $NameItem): RecordType
    {
        $this->NameItem = $NameItem;
        return $this;
    }

    /**
     * @return AdrItemType|null
     */
    public function getAdrItem(): ?AdrItemType
    {
        return $this->AdrItem;
    }

    /**
     * @param AdrItemType $AdrItem
     *
     * @return RecordType
     */
    public function setAdrItem(AdrItemType $AdrItem): RecordType
    {
        $this->AdrItem = $AdrItem;
        return $this;
    }

    /**
     * @return RufnrItemType|null
     */
    public function getRufnrItem(): ?RufnrItemType
    {
        return $this->RufnrItem;
    }

    /**
     * @param RufnrItemType $RufnrItem
     *
     * @return RecordType
     */
    public function setRufnrItem(RufnrItemType $RufnrItem): RecordType
    {
        $this->RufnrItem = $RufnrItem;
        return $this;
    }

    /**
     * @return GeoItemType|null
     */
    public function getGeoItem(): ?GeoItemType
    {
        return $this->GeoItem;
    }

    /**
     * @param GeoItemType $GeoItem
     *
     * @return RecordType
     */
    public function setGeoItem(GeoItemType $GeoItem): RecordType
    {
        $this->GeoItem = $GeoItem;
        return $this;
    }

    /**
     * @return ExtFieldItemType|null
     */
    public function getExtFieldItem(): ?ExtFieldItemType
    {
        return $this->ExtFieldItem;
    }

    /**
     * @param ExtFieldItemType $ExtFieldItem
     *
     * @return RecordType
     */
    public function setExtFieldItem(ExtFieldItemType $ExtFieldItem): RecordType
    {
        $this->ExtFieldItem = $ExtFieldItem;
        return $this;
    }
}
