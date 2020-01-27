<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\RequestType;

/**
 * The SimpleInRecordWSType enables you to easily construct an object for your input data record.
 *
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class SimpleInRecordWSType
{
    /**
     * Numeric ID of the record. This information must be unique within the current session.
     *
     * @var int
     */
    private $recordId;

    /**
     * The first name of an individual.
     *
     * @var string|null
     */
    private $vorname;

    /**
     * The last name of an individual.
     *
     * @var string|null
     */
    private $name;

    /**
     * The street name.
     *
     * @var string|null
     */
    private $strasse;

    /**
     * The house number.
     *
     * May also contain house number additions in the direction of entry.
     *
     * Please note: The ADDRESSFACTORY system recognizes and separates house number additions. After the
     * comparison, the field "hausnummer" only contains the numerical part of the house number. The house number
     * suffix is output as a separate field.
     *
     * @var string|null
     */
    private $hausnummer;

    /**
     * The postal code.
     *
     * @var string|null
     */
    private $plz;

    /**
     * The city name.
     *
     * May also contain place additions in the input direction.
     *
     * Please note: The ADDRESSFACTORY system recognizes and separates location additions. After the
     * comparison, the "ort" field only contains the place name. The location suffix is output as a
     * separate field.
     *
     * @var string|null
     */
    private $ort;

    /**
     * @var string|null
     *
     * @deprecated According to the documentation this seems not suppported at the moment.
     */
    private $anfragegrund;

    /**
     * @var string|null
     *
     * @deprecated According to the documentation this seems not suppported at the moment.
     */
    private $geburtsdatum;

    /**
     * @param int $recordId
     */
    public function __construct(int $recordId)
    {
        $this->recordId = $recordId;
    }

    /**
     * @param int $recordId
     * @return SimpleInRecordWSType
     */
    public function setRecordId(int $recordId): self
    {
        $this->recordId = $recordId;
        return $this;
    }

    /**
     * @param string $firstName
     * @return SimpleInRecordWSType
     */
    public function setVorname(string $firstName): self
    {
        $this->vorname = $firstName;
        return $this;
    }

    /**
     * @param string $lastName
     * @return SimpleInRecordWSType
     */
    public function setName(string $lastName): self
    {
        $this->name = $lastName;
        return $this;
    }

    /**
     * @param string $street
     * @return SimpleInRecordWSType
     */
    public function setStrasse(string $street): self
    {
        $this->strasse = $street;
        return $this;
    }

    /**
     * @param string $houseNumber
     * @return SimpleInRecordWSType
     */
    public function setHausnummer(string $houseNumber): self
    {
        $this->hausnummer = $houseNumber;
        return $this;
    }

    /**
     * @param string $postalCode
     * @return SimpleInRecordWSType
     */
    public function setPlz(string $postalCode): self
    {
        $this->plz = $postalCode;
        return $this;
    }

    /**
     * @param string $city
     * @return SimpleInRecordWSType
     */
    public function setOrt(string $city): self
    {
        $this->ort = $city;
        return $this;
    }

    /**
     * @param string $reason
     * @return SimpleInRecordWSType
     */
    public function setAnfragegrund(string $reason): self
    {
        $this->anfragegrund = $reason;
        return $this;
    }

    /**
     * @param \DateTime $birthDate
     * @return SimpleInRecordWSType
     */
    public function setGeburtsdatum(\DateTime $birthDate): self
    {
        $timezone    = new \DateTimeZone('Europe/Berlin');
        $convertDate = $birthDate->setTimezone($timezone)->format(\DateTime::ATOM);

        $this->geburtsdatum = $convertDate;
        return $this;
    }
}
