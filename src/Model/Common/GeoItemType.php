<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class GeoItemType
{
    private ?KoordWgs84Type $KoordWgs84 = null;

    private ?UtmWgs84Type $UtmWgs84 = null;

    private ?GkbDhdnType $GkbDhdn = null;

    public function getKoordWgs84(): ?KoordWgs84Type
    {
        return $this->KoordWgs84;
    }

    public function setKoordWgs84(KoordWgs84Type $KoordWgs84): GeoItemType
    {
        $this->KoordWgs84 = $KoordWgs84;
        return $this;
    }

    public function getUtmWgs84(): ?UtmWgs84Type
    {
        return $this->UtmWgs84;
    }

    public function setUtmWgs84(UtmWgs84Type $UtmWgs84): GeoItemType
    {
        $this->UtmWgs84 = $UtmWgs84;
        return $this;
    }

    public function getGkbDhdn(): ?GkbDhdnType
    {
        return $this->GkbDhdn;
    }

    public function setGkbDhdn(GkbDhdnType $GkbDhdn): GeoItemType
    {
        $this->GkbDhdn = $GkbDhdn;
        return $this;
    }
}
