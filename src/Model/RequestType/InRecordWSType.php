<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\RequestType;

use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\RecordType;

class InRecordWSType extends RecordType
{
    private ?string $anfragegrund = null;

    private ?string $geburtsdatum = null;

    public function setAnfragegrund(string $reason): self
    {
        $this->anfragegrund = $reason;
        return $this;
    }

    public function setGeburtsdatum(string $dateOfBirth): self
    {
        $this->geburtsdatum = $dateOfBirth;
        return $this;
    }
}
