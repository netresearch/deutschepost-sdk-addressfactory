<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

abstract class Durchfuehrbares
{
    protected Fehler $Fehler;

    protected bool $durchgefuehrt;

    protected bool $erfolg;

    public function getFehler(): Fehler
    {
        return $this->Fehler;
    }

    public function getDurchgefuehrt(): bool
    {
        return $this->durchgefuehrt;
    }

    public function getErfolg(): bool
    {
        return $this->erfolg;
    }
}
