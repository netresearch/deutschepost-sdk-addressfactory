<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model;

/**
 * OpenSessionRequest
 *
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class OpenSessionRequest
{
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
     * @param string|null $configName
     * @return OpenSessionRequest
     */
    public function setConfigName(string $configName = null): self
    {
        $this->configName = $configName;
        return $this;
    }

    /**
     * @param string|null $clientId
     * @return OpenSessionRequest
     */
    public function setMandantId(string $clientId = null): self
    {
        $this->mandantId = $clientId;
        return $this;
    }
}
