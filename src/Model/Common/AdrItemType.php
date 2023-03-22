<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class AdrItemType
{
    private ?HausanschriftType $Hausanschrift = null;

    private ?PostfachType $Postfach = null;

    private ?PackstationType $Packstation = null;

    private ?PostfilialeType $Postfiliale = null;

    private ?GEType $GE = null;

    public function getHausanschrift(): ?HausanschriftType
    {
        return $this->Hausanschrift;
    }

    public function setHausanschrift(HausanschriftType $Hausanschrift): AdrItemType
    {
        $this->Hausanschrift = $Hausanschrift;
        return $this;
    }

    public function getPostfach(): ?PostfachType
    {
        return $this->Postfach;
    }

    public function setPostfach(PostfachType $Postfach): AdrItemType
    {
        $this->Postfach = $Postfach;
        return $this;
    }

    public function getPackstation(): ?PackstationType
    {
        return $this->Packstation;
    }

    public function setPackstation(PackstationType $Packstation): AdrItemType
    {
        $this->Packstation = $Packstation;
        return $this;
    }

    public function getPostfiliale(): ?PostfilialeType
    {
        return $this->Postfiliale;
    }

    public function setPostfiliale(PostfilialeType $Postfiliale): AdrItemType
    {
        $this->Postfiliale = $Postfiliale;
        return $this;
    }

    public function getGE(): ?GEType
    {
        return $this->GE;
    }

    public function setGE(GEType $GE): AdrItemType
    {
        $this->GE = $GE;
        return $this;
    }
}
