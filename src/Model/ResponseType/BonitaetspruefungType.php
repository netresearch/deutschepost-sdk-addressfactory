<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class BonitaetspruefungType extends BearbeitungType
{
    /**
     * @var string $art
     */
    protected $art;

    /**
     * @var boolean $erfolg
     */
    protected $erfolg;

    /**
     * One of: gruen, gelb, rot
     *
     * @var string
     */
    protected $ampelwert;

    /**
     * @return string
     */
    public function getArt(): string
    {
        return $this->art;
    }

    /**
     * @return boolean
     */
    public function getErfolg(): bool
    {
        return $this->erfolg;
    }

    /**
     * @return string
     */
    public function getAmpelwert(): string
    {
        return $this->ampelwert;
    }
}
