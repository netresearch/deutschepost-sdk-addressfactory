<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Api\Data;

/**
 * Interface PersonInterface
 *
 * @api
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
interface PersonInterface
{
    /**
     * @return string
     */
    public function getSalutation(): string;

    /**
     * @return string
     */
    public function getFirstName(): string;

    /**
     * @return string
     */
    public function getLastName(): string;

    /**
     * @return string[]
     */
    public function getCompany(): array;

    /**
     * @return string
     */
    public function getPrefix(): string;

    /**
     * @return string
     */
    public function getSuffix(): string;

    /**
     * @return string
     */
    public function getAcademicTitle(): string;

    /**
     * @return string
     */
    public function getTitleOfNobility(): string;

    /**
     * @return string
     */
    public function getGender(): string;

    /**
     * @return string
     */
    public function getPostNumber(): string;
}
