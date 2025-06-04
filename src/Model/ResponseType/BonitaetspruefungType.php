<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class BonitaetspruefungType extends BearbeitungType
{
    private string $art;

    private bool $erfolg;

    /**
     * One of: gruen, gelb, rot
     */
    private string $ampelwert;

    public function getArt(): string
    {
        return $this->art;
    }

    public function getErfolg(): bool
    {
        return $this->erfolg;
    }

    public function getAmpelwert(): string
    {
        return $this->ampelwert;
    }
}
