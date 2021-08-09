<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Api\Data;

/**
 * @api
 */
interface PersonInterface
{
    public function getSalutation(): string;

    public function getFirstName(): string;

    public function getLastName(): string;

    /**
     * @return string[]
     */
    public function getCompany(): array;

    public function getPrefix(): string;

    public function getSuffix(): string;

    public function getAcademicTitle(): string;

    public function getTitleOfNobility(): string;

    public function getGender(): string;

    public function getPostNumber(): string;
}
