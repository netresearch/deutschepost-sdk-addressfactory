<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class UmzugspruefungType extends PruefungType
{
    private KategorieType $Kategorie;

    private GeschlossenerZeitraumType $GueltigkeitNachsendeauftrag;

    private string $quelle;

    private int $widerspruch;

    private bool $los;

    public function getKategorie(): KategorieType
    {
        return $this->Kategorie;
    }

    public function getGueltigkeitNachsendeauftrag(): GeschlossenerZeitraumType
    {
        return $this->GueltigkeitNachsendeauftrag;
    }

    public function getQuelle(): string
    {
        return $this->quelle;
    }

    public function getWiderspruch(): int
    {
        return $this->widerspruch;
    }

    public function getLos(): bool
    {
        return $this->los;
    }
}
