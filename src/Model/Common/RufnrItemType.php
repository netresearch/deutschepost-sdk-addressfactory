<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class RufnrItemType
{
    /**
     * @var RufnrType[]|null $Rufnr
     */
    protected $Rufnr;

    /**
     * @param RufnrType[] $Rufnr
     */
    public function __construct(array $Rufnr)
    {
        $this->Rufnr = $Rufnr;
    }

    /**
     * @return RufnrType[]
     */
    public function getRufnr(): array
    {
        return is_array($this->Rufnr) ? $this->Rufnr : [];
    }
}
