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
    protected $ebene;

    /**
     * @var string $grund
     */
    protected $grund;

    /**
     * @var string $letzteBeauskunftung
     */
    protected $letzteBeauskunftung;

    /**
     * @return string
     */
    public function getEbene(): string
    {
        return $this->ebene;
    }

    /**
     * @return string
     */
    public function getGrund(): string
    {
        return $this->grund;
    }

    /**
     * @return string
     */
    public function getLetzteBeauskunftung(): string
    {
        return $this->letzteBeauskunftung;
    }
}
