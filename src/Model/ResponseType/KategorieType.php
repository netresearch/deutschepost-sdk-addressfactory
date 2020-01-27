<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class KategorieType
{
    /**
     * @var string $indiz
     */
    protected $indiz;

    /**
     * @var string $name
     */
    protected $name;

    /**
     * @return string
     */
    public function getIndiz(): string
    {
        return $this->indiz;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
