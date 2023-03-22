<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

abstract class PruefungType extends BearbeitungType
{
    /**
     * One of: positiv, negativ, unbestimmt
     *
     * @var string
     */
    protected string $ergebnis;

    /**
     * @return string
     */
    public function getErgebnis(): string
    {
        return $this->ergebnis;
    }
}
