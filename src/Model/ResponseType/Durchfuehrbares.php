<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

abstract class Durchfuehrbares
{
    /**
     * @var Fehler $Fehler
     */
    protected $Fehler;

    /**
     * @var boolean $durchgefuehrt
     */
    protected $durchgefuehrt;

    /**
     * @var boolean $erfolg
     */
    protected $erfolg;

    /**
     * @return Fehler
     */
    public function getFehler(): Fehler
    {
        return $this->Fehler;
    }

    /**
     * @return boolean
     */
    public function getDurchgefuehrt(): bool
    {
        return $this->durchgefuehrt;
    }

    /**
     * @return boolean
     */
    public function getErfolg(): bool
    {
        return $this->erfolg;
    }
}
