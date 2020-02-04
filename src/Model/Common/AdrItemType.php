<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class AdrItemType
{
    /**
     * @var HausanschriftType|null $Hausanschrift
     */
    protected $Hausanschrift;

    /**
     * @var PostfachType|null $Postfach
     */
    protected $Postfach;

    /**
     * @var PackstationType|null $Packstation
     */
    protected $Packstation;

    /**
     * @var PostfilialeType|null $Postfiliale
     */
    protected $Postfiliale;

    /**
     * @var GEType|null $GE
     */
    protected $GE;

    /**
     * @return HausanschriftType|null
     */
    public function getHausanschrift(): ?HausanschriftType
    {
        return $this->Hausanschrift;
    }

    /**
     * @param HausanschriftType $Hausanschrift
     *
     * @return AdrItemType
     */
    public function setHausanschrift(HausanschriftType $Hausanschrift): AdrItemType
    {
        $this->Hausanschrift = $Hausanschrift;
        return $this;
    }

    /**
     * @return PostfachType|null
     */
    public function getPostfach(): ?PostfachType
    {
        return $this->Postfach;
    }

    /**
     * @param PostfachType $Postfach
     *
     * @return AdrItemType
     */
    public function setPostfach(PostfachType $Postfach): AdrItemType
    {
        $this->Postfach = $Postfach;
        return $this;
    }

    /**
     * @return PackstationType|null
     */
    public function getPackstation(): ?PackstationType
    {
        return $this->Packstation;
    }

    /**
     * @param PackstationType $Packstation
     *
     * @return AdrItemType
     */
    public function setPackstation(PackstationType $Packstation): AdrItemType
    {
        $this->Packstation = $Packstation;
        return $this;
    }

    /**
     * @return PostfilialeType|null
     */
    public function getPostfiliale(): ?PostfilialeType
    {
        return $this->Postfiliale;
    }

    /**
     * @param PostfilialeType $Postfiliale
     *
     * @return AdrItemType
     */
    public function setPostfiliale(PostfilialeType $Postfiliale): AdrItemType
    {
        $this->Postfiliale = $Postfiliale;
        return $this;
    }

    /**
     * @return GEType|null
     */
    public function getGE(): ?GEType
    {
        return $this->GE;
    }

    /**
     * @param GEType $GE
     *
     * @return AdrItemType
     */
    public function setGE(GEType $GE): AdrItemType
    {
        $this->GE = $GE;
        return $this;
    }
}
