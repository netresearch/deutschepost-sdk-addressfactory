<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

/**
 * The SimpleInRecordWSType enables you to easily construct an object for your input data record.
 *
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class OutRecordWSType extends OutRecordType
{
    /**
     * @var string
     */
    protected $icdTrefferKz;

    /**
     * @return string
     */
    public function getIcdTrefferKz(): string
    {
        return $this->icdTrefferKz;
    }
}
