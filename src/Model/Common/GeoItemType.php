<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class GeoItemType
{
    /**
     * @var KoordWgs84Type $KoordWgs84
     */
    protected $KoordWgs84;

    /**
     * @var UtmWgs84Type $UtmWgs84
     */
    protected $UtmWgs84;

    /**
     * @var GkbDhdnType $GkbDhdn
     */
    protected $GkbDhdn;

    /**
     * @param KoordWgs84Type $KoordWgs84
     * @param UtmWgs84Type $UtmWgs84
     * @param GkbDhdnType $GkbDhdn
     */
    public function __construct(
        KoordWgs84Type $KoordWgs84,
        UtmWgs84Type $UtmWgs84,
        GkbDhdnType $GkbDhdn
    ) {
        $this->KoordWgs84 = $KoordWgs84;
        $this->UtmWgs84 = $UtmWgs84;
        $this->GkbDhdn = $GkbDhdn;
    }

    /**
     * @return KoordWgs84Type
     */
    public function getKoordWgs84(): KoordWgs84Type
    {
        return $this->KoordWgs84;
    }

    /**
     * @param KoordWgs84Type $KoordWgs84
     *
     * @return GeoItemType
     */
    public function setKoordWgs84(KoordWgs84Type $KoordWgs84): GeoItemType
    {
        $this->KoordWgs84 = $KoordWgs84;
        return $this;
    }

    /**
     * @return UtmWgs84Type
     */
    public function getUtmWgs84(): UtmWgs84Type
    {
        return $this->UtmWgs84;
    }

    /**
     * @param UtmWgs84Type $UtmWgs84
     *
     * @return GeoItemType
     */
    public function setUtmWgs84(UtmWgs84Type $UtmWgs84): GeoItemType
    {
        $this->UtmWgs84 = $UtmWgs84;
        return $this;
    }

    /**
     * @return GkbDhdnType
     */
    public function getGkbDhdn(): GkbDhdnType
    {
        return $this->GkbDhdn;
    }

    /**
     * @param GkbDhdnType $GkbDhdn
     *
     * @return GeoItemType
     */
    public function setGkbDhdn(GkbDhdnType $GkbDhdn): GeoItemType
    {
        $this->GkbDhdn = $GkbDhdn;
        return $this;
    }
}
