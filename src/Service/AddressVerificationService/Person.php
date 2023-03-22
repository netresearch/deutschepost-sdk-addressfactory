<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Service\AddressVerificationService;

use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PersonInterface;

class Person implements PersonInterface
{
    /**
     * Person constructor.
     * @param string[] $company
     */
    public function __construct(
        private readonly string $salutation = '',
        private readonly string $firstName = '',
        private readonly string $lastName = '',
        private readonly array $company = [],
        private readonly string $prefix = '',
        private readonly string $suffix = '',
        private readonly string $academicTitle = '',
        private readonly string $titleOfNobility = '',
        private readonly string $gender = '',
        private readonly string $postNumber = ''
    ) {
    }

    public function getSalutation(): string
    {
        return $this->salutation;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getCompany(): array
    {
        return $this->company;
    }

    public function getPrefix(): string
    {
        return $this->prefix;
    }

    public function getSuffix(): string
    {
        return $this->suffix;
    }

    public function getAcademicTitle(): string
    {
        return $this->academicTitle;
    }

    public function getTitleOfNobility(): string
    {
        return $this->titleOfNobility;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function getPostNumber(): string
    {
        return $this->postNumber;
    }
}
