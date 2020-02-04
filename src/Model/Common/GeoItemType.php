<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class GeoItemType
{
    /**
     * @var KoordWgs84Type|null $KoordWgs84
     */
    protected $KoordWgs84;

    /**
     * @var UtmWgs84Type|null $UtmWgs84
     */
    protected $UtmWgs84;

    /**
     * @var GkbDhdnType|null $GkbDhdn
     */
    protected $GkbDhdn;

    /**
     * @return KoordWgs84Type|null
     */
    public function getKoordWgs84(): ?KoordWgs84Type
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
     * @return UtmWgs84Type|null
     */
    public function getUtmWgs84(): ?UtmWgs84Type
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
     * @return GkbDhdnType|null
     */
    public function getGkbDhdn(): ?GkbDhdnType
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
