<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model;

use PostDirekt\Sdk\AddressfactoryDirect\Model\RequestType\InRecordWSType;

class ProcessDataRequest
{
    /**
     * The session id.
     */
    private ?string $sessionId = null;

    /**
     * The configuration name. You can get the name of the configuration from Deutsche Post Direkt.
     */
    private ?string $configName = null;

    /**
     * The "mandantId" parameter is optionally and can be used to determine which clients are to be
     * compared. You receive the "mandantId" from DeutschePost Direkt GmbH.
     */
    private ?string $mandantId = null;

    /**
     * The input data record to be compared.
     *
     * @var InRecordWSType[]
     */
    private ?array $inRecord = null;

    public function setSessionId(?string $sessionId): self
    {
        $this->sessionId = $sessionId;
        return $this;
    }

    public function setConfigName(?string $configName): self
    {
        $this->configName = $configName;
        return $this;
    }

    public function setMandantId(?string $clientId): self
    {
        $this->mandantId = $clientId;
        return $this;
    }

    /**
     * @param InRecordWSType[] $inRecords
     */
    public function setInRecord(array $inRecords): self
    {
        $this->inRecord = $inRecords;
        return $this;
    }
}
