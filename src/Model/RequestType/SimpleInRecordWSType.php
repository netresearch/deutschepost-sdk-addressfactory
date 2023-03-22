<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\RequestType;

/**
 * The SimpleInRecordWSType enables you to easily construct an object for your input data record.
 */
class SimpleInRecordWSType
{
    /**
     * The first name of an individual.
     */
    private ?string $vorname = null;

    /**
     * The last name of an individual.
     */
    private ?string $name = null;

    /**
     * The street name.
     */
    private ?string $strasse = null;

    /**
     * The house number.
     *
     * May also contain house number additions in the direction of entry.
     *
     * Please note: The ADDRESSFACTORY system recognizes and separates house number additions. After the
     * comparison, the field "hausnummer" only contains the numerical part of the house number. The house number
     * suffix is output as a separate field.
     */
    private ?string $hausnummer = null;

    /**
     * The postal code.
     */
    private ?string $plz = null;

    /**
     * The city name.
     *
     * May also contain place additions in the input direction.
     *
     * Please note: The ADDRESSFACTORY system recognizes and separates location additions. After the
     * comparison, the "ort" field only contains the place name. The location suffix is output as a
     * separate field.
     */
    private ?string $ort = null;

    /**
     * @deprecated According to the documentation this seems not suppported at the moment.
     */
    private ?string $anfragegrund = null;

    /**
     * @deprecated According to the documentation this seems not suppported at the moment.
     */
    private ?string $geburtsdatum = null;

    public function __construct(private readonly int $recordId)
    {
    }

    public function setVorname(string $firstName): self
    {
        $this->vorname = $firstName;
        return $this;
    }

    public function setName(string $lastName): self
    {
        $this->name = $lastName;
        return $this;
    }

    public function setStrasse(string $street): self
    {
        $this->strasse = $street;
        return $this;
    }

    public function setHausnummer(string $houseNumber): self
    {
        $this->hausnummer = $houseNumber;
        return $this;
    }

    public function setPlz(string $postalCode): self
    {
        $this->plz = $postalCode;
        return $this;
    }

    public function setOrt(string $city): self
    {
        $this->ort = $city;
        return $this;
    }

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
