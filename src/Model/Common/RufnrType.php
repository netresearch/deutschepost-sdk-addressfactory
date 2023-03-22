<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class RufnrType
{
    private string $typ;

    private ?string $Ortsvorwahl = null;

    private ?string $Durchwahl = null;

    public function __construct(string $typ)
    {
        $this->typ = $typ;
    }

    public function getOrtsvorwahl(): string
    {
        return (string) $this->Ortsvorwahl;
    }

    public function setOrtsvorwahl(string $Ortsvorwahl): RufnrType
    {
        $this->Ortsvorwahl = $Ortsvorwahl;
        return $this;
    }

    public function getDurchwahl(): string
    {
        return (string) $this->Durchwahl;
    }

    public function setDurchwahl(string $Durchwahl): RufnrType
    {
        $this->Durchwahl = $Durchwahl;
        return $this;
    }

    public function getTyp(): string
    {
        return $this->typ;
    }
}
