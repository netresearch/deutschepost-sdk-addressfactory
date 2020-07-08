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
     *
     * @var string|null
     */
    private $sessionId;

    /**
     * The configuration name. You can get the name of the configuration from Deutsche Post Direkt.
     *
     * @var string|null
     */
    private $configName;

    /**
     * The "mandantId" parameter is optionally and can be used to determine which clients are to be
     * compared. You receive the "mandantId" from DeutschePost Direkt GmbH.
     *
     * @var string|null
     */
    private $mandantId;

    /**
     * The input data record to be compared.
     *
     * @var InRecordWSType[]
     */
    private $inRecord;

    /**
     * @param string|null $sessionId
     * @return ProcessDataRequest
     */
    public function setSessionId(?string $sessionId): self
    {
        $this->sessionId = $sessionId;
        return $this;
    }

    /**
     * @param string|null $configName
     * @return ProcessDataRequest
     */
    public function setConfigName(?string $configName): self
    {
        $this->configName = $configName;
        return $this;
    }

    /**
     * @param string|null $clientId
     * @return ProcessDataRequest
     */
    public function setMandantId(?string $clientId): self
    {
        $this->mandantId = $clientId;
        return $this;
    }

    /**
     * @param InRecordWSType[] $inRecords
     * @return ProcessDataRequest
     */
    public function setInRecord(array $inRecords): self
    {
        $this->inRecord = $inRecords;
        return $this;
    }
}
