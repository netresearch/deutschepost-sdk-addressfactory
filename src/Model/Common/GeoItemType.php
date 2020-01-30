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
    public function getKoordWgs84()
    {
        return $this->KoordWgs84;
    }

    /**
     * @param KoordWgs84Type|null $KoordWgs84
     */
    public function setKoordWgs84(?KoordWgs84Type $KoordWgs84): void
    {
        $this->KoordWgs84 = $KoordWgs84;
    }

    /**
     * @return UtmWgs84Type|null
     */
    public function getUtmWgs84()
    {
        return $this->UtmWgs84;
    }

    /**
     * @param UtmWgs84Type|null $UtmWgs84
     */
    public function setUtmWgs84(?UtmWgs84Type $UtmWgs84): void
    {
        $this->UtmWgs84 = $UtmWgs84;
    }

    /**
     * @return GkbDhdnType|null
     */
    public function getGkbDhdn()
    {
        return $this->GkbDhdn;
    }

    /**
     * @param GkbDhdnType|null $GkbDhdn
     */
    public function setGkbDhdn(?GkbDhdnType $GkbDhdn): void
    {
        $this->GkbDhdn = $GkbDhdn;
    }
}
