<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class ZustellbarkeitspruefungType extends PruefungType
{
    /**
     * One of: Person, Haushalt, Gebaeude
     *
     * @var string
     */
    private string $ebene;

    private string $grund;

    private string $letzteBeauskunftung;

    public function getEbene(): string
    {
        return $this->ebene;
    }

    public function getGrund(): string
    {
        return $this->grund;
    }

    public function getLetzteBeauskunftung(): string
    {
        return $this->letzteBeauskunftung;
    }
}
