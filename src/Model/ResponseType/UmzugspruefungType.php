<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class UmzugspruefungType extends PruefungType
{
    /**
     * @var KategorieType $Kategorie
     */
    protected $Kategorie;

    /**
     * @var GeschlossenerZeitraumType $GueltigkeitNachsendeauftrag
     */
    protected $GueltigkeitNachsendeauftrag;

    /**
     * @var string $quelle
     */
    protected $quelle;

    /**
     * @var int $widerspruch
     */
    protected $widerspruch;

    /**
     * @var boolean $los
     */
    protected $los;

    /**
     * @return KategorieType
     */
    public function getKategorie(): KategorieType
    {
        return $this->Kategorie;
    }

    /**
     * @return GeschlossenerZeitraumType
     */
    public function getGueltigkeitNachsendeauftrag(): GeschlossenerZeitraumType
    {
        return $this->GueltigkeitNachsendeauftrag;
    }

    /**
     * @return string
     */
    public function getQuelle(): string
    {
        return $this->quelle;
    }

    /**
     * @return int
     */
    public function getWiderspruch(): int
    {
        return $this->widerspruch;
    }

    /**
     * @return boolean
     */
    public function getLos(): bool
    {
        return $this->los;
    }
}
