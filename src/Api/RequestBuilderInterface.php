<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Api;

/**
 * @api
 */
interface RequestBuilderInterface
{
    public const FILE_TYPE_MERGE = 'Merge';
    public const FILE_TYPE_PURGE = 'Purge';

    public const INQUIRY_REASON_ABK = 'ABK';
    public const INQUIRY_REASON_ABV = 'ABV';
    public const INQUIRY_REASON_ABB = 'ABB';
    public const INQUIRY_REASON_ABI = 'ABI';
    public const INQUIRY_REASON_ABM = 'ABM';

    public const GENDER_MALE = 'M';
    public const GENDER_FEMALE = 'W';
    public const GENDER_NOT_SPECIFIED = 'U';

    public const PHONE_TYPE_UNKNOWN = 'Unbekannt';
    public const PHONE_TYPE_PRIVATE = 'Privat';
    public const PHONE_TYPE_BUSINESS = 'Geschaeftlich';
    public const PHONE_TYPE_MOBILE = 'Mobil';
    public const PHONE_TYPE_FAX = 'Fax';

    /**
     * Set record metadata (optional).
     *
     * @see RequestBuilderInterface::FILE_TYPE_PURGE
     * @see RequestBuilderInterface::FILE_TYPE_MERGE
     *
     */
    public function setMetadata(
        int $recordId,
        string $fileType = self::FILE_TYPE_MERGE,
        int $fileId = 0,
        int $sequenceId = 0
    ): RequestBuilderInterface;

    /**
     * Set a name for the inquiry.
     *
     * @param string|null $salutation Examples: "Frau", "Mr"
     * @param string[] $company Company, up to three lines
     * @param string|null $prefix Name prefix. e.g.: "von"
     * @param string|null $suffix Name suffix, e.g.: "MdB", "PhD", "Sr."
     * @param string|null $academicTitle Examples: "Dr.", "Prof. Dr.", "Prof."
     * @param string|null $titleOfNobility Examples: "Graf", "Count"
     * @param string|null $gender Possible values: "M", "W", "U"
     * @see RequestBuilderInterface::GENDER_MALE
     * @see RequestBuilderInterface::GENDER_FEMALE
     * @see RequestBuilderInterface::GENDER_NOT_SPECIFIED
     *
     */
    public function setPerson(
        ?string $firstName = null,
        ?string $lastName = null,
        ?string $salutation = null,
        array $company = [],
        ?string $prefix = null,
        ?string $suffix = null,
        ?string $academicTitle = null,
        ?string $titleOfNobility = null,
        ?string $gender = null
    ): RequestBuilderInterface;

    /**
     * Add a phone number to the inquiry.
     *
     * @see RequestBuilderInterface::PHONE_TYPE_UNKNOWN
     * @see RequestBuilderInterface::PHONE_TYPE_PRIVATE
     * @see RequestBuilderInterface::PHONE_TYPE_BUSINESS
     * @see RequestBuilderInterface::PHONE_TYPE_MOBILE
     * @see RequestBuilderInterface::PHONE_TYPE_FAX
     *
     */
    public function addPhoneNumber(
        string $areaCode,
        string $dialNumber,
        string $type = self::PHONE_TYPE_UNKNOWN
    ): RequestBuilderInterface;

    /**
     * Set the person's post number
     */
    public function setPersonPostNumber(string $postNumber): RequestBuilderInterface;

    /**
     * Set parameters required for personal credit rating inquiries (date of birth, inquiry reason).
     *
     * Web service accepts different formats, although only the last one conforms to the schema:
     * - YYYYMMDD
     * - YYYY-MM-DD
     * - YYYY-MM-DDTHH:MM:SS
     *
     * Possible reasons for inquiry:
     * - ABK: Request for credit check – purchase
     *        (Anfrage Bonitätsprüfung Kauf)
     * - ABV: Request for credit check – insurance contract
     *        (Anfrage Bonitätsprüfung Versicherungsvertrag)
     * - ABB: Request for credit check of a self-employed or part-time insurance agent/applicant
     *        (Anfrage Bonitätsprüfung eines frei- oder nebenberuflichen Versicherungsvertreters/Bewerbers)
     * - ABI: Request for credit check – debt collection
     *        (Anfrage Bonitätsprüfung Inkasso)
     * - ABM: Request for credit check – mobile communications
     *        (Anfrage Bonitätsprüfung Mobilfunk)
     *
     * @see RequestBuilderInterface::INQUIRY_REASON_ABK
     * @see RequestBuilderInterface::INQUIRY_REASON_ABV
     * @see RequestBuilderInterface::INQUIRY_REASON_ABB
     * @see RequestBuilderInterface::INQUIRY_REASON_ABI
     * @see RequestBuilderInterface::INQUIRY_REASON_ABM
     */
    public function setCreditRatingInquiry(string $dateOfBirth, string $reason): RequestBuilderInterface;

    /**
     * Set a regular street address for the inquiry.
     *
     * @param string|null $country Full country name, e.g. "Deutschland" (Land)
     * @param string|null $postalCode (Postleitzahl)
     * @param string|null $city Example: "Frankfurt" (Ort)
     * @param string|null $streetName (Straße)
     * @param string|null $streetNumber (Hausnummer)
     * @param string|null $state Federal state, e.g.: "Nordrhein-Westfalen", "Hessen" (Bundesland)
     * @param string|null $addressAddition Example: "c/o Müller" (Adresszusatz)
     * @param string|null $deliveryInstruction Example: "4. Etage" (Zustellhinweis)
     */
    public function setAddress(
        ?string $country = null,
        ?string $postalCode = null,
        ?string $city = null,
        ?string $streetName = null,
        ?string $streetNumber = null,
        ?string $state = null,
        ?string $addressAddition = null,
        ?string $deliveryInstruction = null
    ): RequestBuilderInterface;

    /**
     * Specify further address details for the inquiry.
     *
     * @param string|null $streetNumberAddition Examples: [a-z], "Rückgebäude" (Hausnummerzusatz)
     * @param string|null $cityAddition Example: "am Main" (Ortszusatz)
     * @param string|null $urbanDistrict Examples: "Zentrum", "Lichtenberg" (Ortsteil)
     * @param string|null $municipality (Gemeinde)
     * @param string|null $district District/County (Kreis)
     * @param string|null $region Administrative Region/District (Regierungsbezirk)
     */
    public function setAddressDetails(
        ?string $streetNumberAddition = null,
        ?string $cityAddition = null,
        ?string $urbanDistrict = null,
        ?string $municipality = null,
        ?string $district = null,
        ?string $region = null
    ): RequestBuilderInterface;

    /**
     * Set a regular address' routing data for the inquiry.
     *
     * @param string|null $alOrt (Alphanummer des Bestimmungsortes)
     * @param string|null $cargoCenter (Frachtzentrum)
     * @param string|null $streetKey (Straßenschlüssel)
     * @param string|null $districtKey (KGS, Kreisgemeindeschlüssel)
     */
    public function setAddressRoutingData(
        ?string $routingCode = null,
        ?string $alOrt = null,
        ?string $cargoCenter = null,
        ?string $streetKey = null,
        ?string $districtKey = null
    ): RequestBuilderInterface;

    /**
     * Set address coordinates.
     */
    public function setCoordinates(string $latitude, string $longitude): RequestBuilderInterface;

    /**
     * Set address coordinates using the Universal Transverse Mercator coordinate system.
     *
     * @param string $northing Nordwert/Hochwert
     * @param string $easting Ostwert/Rechtswert
     */
    public function setCoordinatesUtm(string $northing, string $easting): RequestBuilderInterface;

    /**
     * Set address coordinates using the Gauss-Krüger (DHDN) coordinate system.
     *
     * @param string $northing Hochwert/Nordwert
     * @param string $easting Rechtswert/Ostwert
     */
    public function setCoordinatesGk(string $northing, string $easting): RequestBuilderInterface;

    /**
     * Set a Postfach address for the inquiry.
     *
     * @param string|null $number Postfach number
     * @param string|null $cityAddition Example: "am Main" (Ortszusatz)
     */
    public function setPostfach(
        ?string $number = null,
        ?string $postalCode = null,
        ?string $city = null,
        ?string $cityAddition = null
    ): RequestBuilderInterface;

    /**
     * Set a Postfach address' routing data for the inquiry.
     *
     * @param string|null $alOrt (Alphanummer des Bestimmungsortes)
     * @param string|null $cargoCenter (Frachtzentrum)
     * @param string|null $streetKey (Straßenschlüssel)
     * @param string|null $districtKey (KGS, Kreisgemeindeschlüssel)
     */
    public function setPostfachRoutingData(
        ?string $routingCode = null,
        ?string $alOrt = null,
        ?string $cargoCenter = null,
        ?string $streetKey = null,
        ?string $districtKey = null
    ): RequestBuilderInterface;

    /**
     * Set a Packstation address for the inquiry.
     *
     * @param string|null $number Packstation number
     * @param string|null $cityAddition Example: "am Main" (Ortszusatz)
     * @param string|null $state Federal state, e.g.: "Nordrhein-Westfalen", "Hessen" (Bundesland)
     * @param string|null $municipality (Gemeinde)
     * @param string|null $district District/County (Kreis)
     * @param string|null $region Administrative Region/District (Regierungsbezirk)
     */
    public function setPackstation(
        ?string $number = null,
        ?string $postalCode = null,
        ?string $city = null,
        ?string $cityAddition = null,
        ?string $state = null,
        ?string $municipality = null,
        ?string $district = null,
        ?string $region = null
    ): RequestBuilderInterface;

    /**
     * Set a Packstation address' routing data for the inquiry.
     *
     * @param string|null $alOrt (Alphanummer des Bestimmungsortes)
     * @param string|null $cargoCenter (Frachtzentrum)
     * @param string|null $streetKey (Straßenschlüssel)
     * @param string|null $districtKey (KGS, Kreisgemeindeschlüssel)
     */
    public function setPackstationRoutingData(
        ?string $routingCode = null,
        ?string $alOrt = null,
        ?string $cargoCenter = null,
        ?string $streetKey = null,
        ?string $districtKey = null
    ): RequestBuilderInterface;

    /**
     * Set a Postfiliale address for the inquiry.
     *
     * @param string|null $number Postfiliale number
     * @param string|null $cityAddition Example: "am Main" (Ortszusatz)
     * @param string|null $state Federal state, e.g.: "Nordrhein-Westfalen", "Hessen" (Bundesland)
     * @param string|null $municipality (Gemeinde)
     * @param string|null $district District/County (Kreis)
     * @param string|null $region Administrative Region/District (Regierungsbezirk)
     */
    public function setPostfiliale(
        ?string $number = null,
        ?string $postalCode = null,
        ?string $city = null,
        ?string $cityAddition = null,
        ?string $state = null,
        ?string $municipality = null,
        ?string $district = null,
        ?string $region = null
    ): RequestBuilderInterface;

    /**
     * Set a Postfiliale address' routing data for the inquiry.
     *
     * @param string|null $alOrt (Alphanummer des Bestimmungsortes)
     * @param string|null $cargoCenter (Frachtzentrum)
     * @param string|null $streetKey (Straßenschlüssel)
     * @param string|null $districtKey (KGS, Kreisgemeindeschlüssel)
     */
    public function setPostfilialeRoutingData(
        ?string $routingCode = null,
        ?string $alOrt = null,
        ?string $cargoCenter = null,
        ?string $streetKey = null,
        ?string $districtKey = null
    ): RequestBuilderInterface;

    /**
     * Set a Großempfänger address (large-scale addressee with own postal code).
     *
     * @param string|null $name Name of the institution/company/agency
     * @param string|null $cityAddition Example: "am Main" (Ortszusatz)
     * @param string|null $state Federal state, e.g.: "Nordrhein-Westfalen", "Hessen" (Bundesland)
     * @param string|null $municipality (Gemeinde)
     * @param string|null $district District/County (Kreis)
     * @param string|null $region Administrative Region/District (Regierungsbezirk)
     */
    public function setCorporateAddress(
        ?string $name = null,
        ?string $postalCode = null,
        ?string $city = null,
        ?string $cityAddition = null,
        ?string $state = null,
        ?string $municipality = null,
        ?string $district = null,
        ?string $region = null
    ): RequestBuilderInterface;

    /**
     * Set a Großempfänger address' routing data for the inquiry.
     *
     * @param string|null $alOrt (Alphanummer des Bestimmungsortes)
     * @param string|null $cargoCenter (Frachtzentrum)
     * @param string|null $streetKey (Straßenschlüssel)
     * @param string|null $districtKey (KGS, Kreisgemeindeschlüssel)
     */
    public function setCorporateAddressRoutingData(
        ?string $routingCode = null,
        ?string $alOrt = null,
        ?string $cargoCenter = null,
        ?string $streetKey = null,
        ?string $districtKey = null
    ): RequestBuilderInterface;

    /**
     * Add an arbitrary key-value pair to the request. Use for fields that have no native representation.
     */
    public function addExtendedField(string $key, string $value): RequestBuilderInterface;

    /**
     * Creates the request data type suitable for use with the address validation service.
     *
     * @return object
     */
    public function create();
}
