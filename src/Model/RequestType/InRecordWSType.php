<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\RequestType;

use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\RecordType;

/**
 * InRecordWSType
 *
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class InRecordWSType extends RecordType
{
    /**
     * @var string|null $anfragegrund
     */
    private $anfragegrund;

    /**
     * @var string|null $geburtsdatum
     */
    private $geburtsdatum;

    /**
     * @param string $reason
     * @return InRecordWSType
     */
    public function setAnfragegrund(string $reason): self
    {
        $this->anfragegrund = $reason;
        return $this;
    }

    /**
     * @param \DateTime $birthDate
     * @return InRecordWSType
     */
    public function setGeburtsdatum(\DateTime $birthDate): self
    {
        $timezone    = new \DateTimeZone('Europe/Berlin');
        $convertDate = $birthDate->setTimezone($timezone)->format(\DateTime::ATOM);

        $this->geburtsdatum = $convertDate;
        return $this;
    }
}
