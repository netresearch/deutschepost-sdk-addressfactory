<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Service\AddressVerificationService;

use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\PersonInterface;

/**
 * Person
 *
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class Person implements PersonInterface
{
    /**
     * @var string
     */
    private $salutation;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string[]
     */
    private $company;

    /**
     * @var string
     */
    private $prefix;

    /**
     * @var string
     */
    private $suffix;

    /**
     * @var string
     */
    private $academicTitle;

    /**
     * @var string
     */
    private $titleOfNobility;

    /**
     * @var string
     */
    private $gender;

    /**
     * @var string
     */
    private $postNumber;

    /**
     * Person constructor.
     * @param string $salutation
     * @param string $firstName
     * @param string $lastName
     * @param string[] $company
     * @param string $prefix
     * @param string $suffix
     * @param string $academicTitle
     * @param string $titleOfNobility
     * @param string $gender
     * @param string $postNumber
     */
    public function __construct(
        string $salutation = '',
        string $firstName = '',
        string $lastName = '',
        array $company = [],
        string $prefix = '',
        string $suffix = '',
        string $academicTitle = '',
        string $titleOfNobility = '',
        string $gender = '',
        string $postNumber = ''
    ) {
        $this->salutation = $salutation;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->company = $company;
        $this->prefix = $prefix;
        $this->suffix = $suffix;
        $this->academicTitle = $academicTitle;
        $this->titleOfNobility = $titleOfNobility;
        $this->gender = $gender;
        $this->postNumber = $postNumber;
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
