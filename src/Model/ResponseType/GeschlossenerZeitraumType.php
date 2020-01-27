<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class GeschlossenerZeitraumType
{
    /**
     * @var string $von
     */
    protected $von;

    /**
     * @var string $bis
     */
    protected $bis;

    /**
     * @return string
     */
    public function getVon(): string
    {
        return $this->von;
    }

    /**
     * @return string
     */
    public function getBis(): string
    {
        return $this->bis;
    }
}
