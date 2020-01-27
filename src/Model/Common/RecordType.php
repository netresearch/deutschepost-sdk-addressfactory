<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class RecordType
{
    /**
     * @var NameItemType $NameItem
     */
    protected $NameItem;

    /**
     * @var AdrItemType $AdrItem
     */
    protected $AdrItem;

    /**
     * @var RufnrItemType $RufnrItem
     */
    protected $RufnrItem;

    /**
     * @var GeoItemType $GeoItem
     */
    protected $GeoItem;

    /**
     * @var ExtFieldItemType $ExtFieldItem
     */
    protected $ExtFieldItem;

    /**
     * @var int $recordId
     */
    protected $recordId;

    /**
     * @var int $fileId
     */
    protected $fileId;

    /**
     * @var int $sequenceId
     */
    protected $sequenceId;

    /**
     * One of: Merge, Purge
     *
     * @var string $fileType
     */
    protected $fileType;

    /**
     * @param int $recordId
     * @param int $fileId
     * @param int $sequenceId
     * @param string $fileType
     */
    public function __construct(
        int $recordId,
        int $fileId,
        int $sequenceId,
        string $fileType
    ) {
        $this->recordId = $recordId;
        $this->fileId = $fileId;
        $this->sequenceId = $sequenceId;
        $this->fileType = $fileType;
    }

    /**
     * @return NameItemType
     */
    public function getNameItem(): NameItemType
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
     * @return AdrItemType
     */
    public function getAdrItem(): AdrItemType
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
     * @return RufnrItemType
     */
    public function getRufnrItem(): RufnrItemType
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
     * @return GeoItemType
     */
    public function getGeoItem(): GeoItemType
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
     * @return ExtFieldItemType
     */
    public function getExtFieldItem(): ExtFieldItemType
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

    /**
     * @return int
     */
    public function getRecordId(): int
    {
        return $this->recordId;
    }

    /**
     * @param int $recordId
     *
     * @return RecordType
     */
    public function setRecordId(int $recordId): RecordType
    {
        $this->recordId = $recordId;
        return $this;
    }

    /**
     * @return int
     */
    public function getFileId(): int
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
     * @return int
     */
    public function getSequenceId(): int
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
     * @return string
     */
    public function getFileType(): string
    {
        return $this->fileType;
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
}
