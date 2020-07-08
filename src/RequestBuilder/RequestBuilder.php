<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\RequestBuilder;

use PostDirekt\Sdk\AddressfactoryDirect\Api\RequestBuilderInterface;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\AdrItemType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\ExtFieldItemType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\ExtFieldType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\GeoItemType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\GEType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\GkbDhdnType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\HausanschriftType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\KoordWgs84Type;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\LeitdatenType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\NameItemType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\OrtszusatzType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\OrtType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\PackstationType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\PostfachType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\PostfilialeType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\RufnrItemType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\RufnrType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\StrasseType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\UtmWgs84Type;
use PostDirekt\Sdk\AddressfactoryDirect\Model\RequestType\InRecordWSType;

class RequestBuilder implements RequestBuilderInterface
{
    /**
     * The collected data used to build the request.
     *
     * @var mixed[]
     */
    private $data = [];

    public function setMetadata(
        int $recordId,
        string $fileType = self::FILE_TYPE_MERGE,
        int $fileId = 0,
        int $sequenceId = 0
    ): RequestBuilderInterface {
        $this->data['meta']['recordId'] = $recordId;
        $this->data['meta']['fileType'] = $fileType;
        $this->data['meta']['fileId'] = $fileId;
        $this->data['meta']['sequenceId'] = $sequenceId;

        return $this;
    }

    public function setPerson(
        string $firstName = null,
        string $lastName = null,
        string $salutation = null,
        array $company = [],
        string $prefix = null,
        string $suffix = null,
        string $academicTitle = null,
        string $titleOfNobility = null,
        string $gender = null
    ): RequestBuilderInterface {
        $this->data['person']['firstName'] = $firstName;
        $this->data['person']['lastName'] = $lastName;
        $this->data['person']['salutation'] = $salutation;
        $this->data['person']['company'] = $company;
        $this->data['person']['prefix'] = $prefix;
        $this->data['person']['suffix'] = $suffix;
        $this->data['person']['academicTitle'] = $academicTitle;
        $this->data['person']['titleOfNobility'] = $titleOfNobility;
        $this->data['person']['gender'] = $gender;

        return $this;
    }

    public function addPhoneNumber(
        string $areaCode,
        string $dialNumber,
        string $type = self::PHONE_TYPE_UNKNOWN
    ): RequestBuilderInterface {
        $this->data['phoneNumbers'][] = [
            'areaCode' => $areaCode,
            'dialNumber' => $dialNumber,
            'type' => $type,
        ];

        return $this;
    }

    public function setPersonPostNumber(string $postNumber): RequestBuilderInterface
    {
        $this->data['person']['postNumber'] = $postNumber;

        return $this;
    }

    public function setCreditRatingInquiry(string $dateOfBirth, string $reason): RequestBuilderInterface
    {
        $this->data['rating']['dateOfBirth'] = $dateOfBirth;
        $this->data['rating']['reason'] = $reason;

        return $this;
    }

    public function setAddress(
        string $country = null,
        string $postalCode = null,
        string $city = null,
        string $streetName = null,
        string $streetNumber = null,
        string $state = null,
        string $addressAddition = null,
        string $deliveryInstruction = null
    ): RequestBuilderInterface {
        $this->data['address']['country'] = $country;
        $this->data['address']['postalCode'] = $postalCode;
        $this->data['address']['city'] = $city;
        $this->data['address']['streetName'] = $streetName;
        $this->data['address']['streetNumber'] = $streetNumber;
        $this->data['address']['state'] = $state;
        $this->data['address']['addressAddition'] = $addressAddition;
        $this->data['address']['deliveryInstruction'] = $deliveryInstruction;

        return $this;
    }

    public function setAddressDetails(
        string $streetNumberAddition = null,
        string $cityAddition = null,
        string $urbanDistrict = null,
        string $municipality = null,
        string $district = null,
        string $region = null
    ): RequestBuilderInterface {
        $this->data['address']['streetNumberAddition'] = $streetNumberAddition;
        $this->data['address']['cityAddition'] = $cityAddition;
        $this->data['address']['urbanDistrict'] = $urbanDistrict;
        $this->data['address']['municipality'] = $municipality;
        $this->data['address']['district'] = $district;
        $this->data['address']['region'] = $region;

        return $this;
    }

    public function setAddressRoutingData(
        string $routingCode = null,
        string $alOrt = null,
        string $cargoCenter = null,
        string $streetKey = null,
        string $districtKey = null
    ): RequestBuilderInterface {
        $this->data['address']['routing']['code'] = $routingCode;
        $this->data['address']['routing']['alOrt'] = $alOrt;
        $this->data['address']['routing']['cargoCenter'] = $cargoCenter;
        $this->data['address']['routing']['streetKey'] = $streetKey;
        $this->data['address']['routing']['districtKey'] = $districtKey;

        return $this;
    }

    public function setCoordinates(string $latitude, string $longitude): RequestBuilderInterface
    {
        $this->data['coordinates']['latlng']['latitude'] = $latitude;
        $this->data['coordinates']['latlng']['longitude'] = $longitude;

        return $this;
    }

    public function setCoordinatesUtm(string $northing, string $easting): RequestBuilderInterface
    {
        $this->data['coordinates']['utm']['northing'] = $northing;
        $this->data['coordinates']['utm']['easting'] = $easting;

        return $this;
    }

    public function setCoordinatesGk(string $northing, string $easting): RequestBuilderInterface
    {
        $this->data['coordinates']['gk']['northing'] = $northing;
        $this->data['coordinates']['gk']['easting'] = $easting;

        return $this;
    }

    public function setPostfach(
        string $number = null,
        string $postalCode = null,
        string $city = null,
        string $cityAddition = null
    ): RequestBuilderInterface {
        $this->data['postfach']['number'] = $number;
        $this->data['postfach']['postalCode'] = $postalCode;
        $this->data['postfach']['city'] = $city;
        $this->data['postfach']['cityAddition'] = $cityAddition;

        return $this;
    }

    public function setPostfachRoutingData(
        string $routingCode = null,
        string $alOrt = null,
        string $cargoCenter = null,
        string $streetKey = null,
        string $districtKey = null
    ): RequestBuilderInterface {
        $this->data['postfach']['routing']['code'] = $routingCode;
        $this->data['postfach']['routing']['alOrt'] = $alOrt;
        $this->data['postfach']['routing']['cargoCenter'] = $cargoCenter;
        $this->data['postfach']['routing']['streetKey'] = $streetKey;
        $this->data['postfach']['routing']['districtKey'] = $districtKey;

        return $this;
    }

    public function setPackstation(
        string $number = null,
        string $postalCode = null,
        string $city = null,
        string $cityAddition = null,
        string $state = null,
        string $municipality = null,
        string $district = null,
        string $region = null
    ): RequestBuilderInterface {
        $this->data['packstation']['number'] = $number;
        $this->data['packstation']['postalCode'] = $postalCode;
        $this->data['packstation']['city'] = $city;
        $this->data['packstation']['cityAddition'] = $cityAddition;
        $this->data['packstation']['state'] = $state;
        $this->data['packstation']['municipality'] = $municipality;
        $this->data['packstation']['district'] = $district;
        $this->data['packstation']['region'] = $region;

        return $this;
    }

    public function setPackstationRoutingData(
        string $routingCode = null,
        string $alOrt = null,
        string $cargoCenter = null,
        string $streetKey = null,
        string $districtKey = null
    ): RequestBuilderInterface {
        $this->data['packstation']['routing']['code'] = $routingCode;
        $this->data['packstation']['routing']['alOrt'] = $alOrt;
        $this->data['packstation']['routing']['cargoCenter'] = $cargoCenter;
        $this->data['packstation']['routing']['streetKey'] = $streetKey;
        $this->data['packstation']['routing']['districtKey'] = $districtKey;

        return $this;
    }

    public function setPostfiliale(
        string $number = null,
        string $postalCode = null,
        string $city = null,
        string $cityAddition = null,
        string $state = null,
        string $municipality = null,
        string $district = null,
        string $region = null
    ): RequestBuilderInterface {
        $this->data['postfiliale']['number'] = $number;
        $this->data['postfiliale']['postalCode'] = $postalCode;
        $this->data['postfiliale']['city'] = $city;
        $this->data['postfiliale']['cityAddition'] = $cityAddition;
        $this->data['postfiliale']['state'] = $state;
        $this->data['postfiliale']['municipality'] = $municipality;
        $this->data['postfiliale']['district'] = $district;
        $this->data['postfiliale']['region'] = $region;

        return $this;
    }

    public function setPostfilialeRoutingData(
        string $routingCode = null,
        string $alOrt = null,
        string $cargoCenter = null,
        string $streetKey = null,
        string $districtKey = null
    ): RequestBuilderInterface {
        $this->data['postfiliale']['routing']['code'] = $routingCode;
        $this->data['postfiliale']['routing']['alOrt'] = $alOrt;
        $this->data['postfiliale']['routing']['cargoCenter'] = $cargoCenter;
        $this->data['postfiliale']['routing']['streetKey'] = $streetKey;
        $this->data['postfiliale']['routing']['districtKey'] = $districtKey;

        return $this;
    }

    public function setCorporateAddress(
        string $name = null,
        string $postalCode = null,
        string $city = null,
        string $cityAddition = null,
        string $state = null,
        string $municipality = null,
        string $district = null,
        string $region = null
    ): RequestBuilderInterface {
        $this->data['ge']['name'] = $name;
        $this->data['ge']['postalCode'] = $postalCode;
        $this->data['ge']['city'] = $city;
        $this->data['ge']['cityAddition'] = $cityAddition;
        $this->data['ge']['state'] = $state;
        $this->data['ge']['municipality'] = $municipality;
        $this->data['ge']['district'] = $district;
        $this->data['ge']['region'] = $region;

        return $this;
    }

    public function setCorporateAddressRoutingData(
        string $routingCode = null,
        string $alOrt = null,
        string $cargoCenter = null,
        string $streetKey = null,
        string $districtKey = null
    ): RequestBuilderInterface {
        $this->data['ge']['routing']['code'] = $routingCode;
        $this->data['ge']['routing']['alOrt'] = $alOrt;
        $this->data['ge']['routing']['cargoCenter'] = $cargoCenter;
        $this->data['ge']['routing']['streetKey'] = $streetKey;
        $this->data['ge']['routing']['districtKey'] = $districtKey;

        return $this;
    }

    public function addExtendedField(string $key, string $value): RequestBuilderInterface
    {
        $this->data['fields'][] = [
            'key' => $key,
            'value' => $value,
        ];

        return $this;
    }

    public function create()
    {
        $recordId = isset($this->data['meta']['recordId']) ? $this->data['meta']['recordId'] : time();
        $record = new InRecordWSType($recordId);
        if (isset($this->data['meta']['fileType'])) {
            $record->setFileType($this->data['meta']['fileType']);
        } else {
            $record->setFileType(self::FILE_TYPE_MERGE);
        }
        if (isset($this->data['meta']['fileId'])) {
            $record->setFileId($this->data['meta']['fileId']);
        } else {
            $record->setFileId(0);
        }
        if (isset($this->data['meta']['sequenceId'])) {
            $record->setSequenceId($this->data['meta']['sequenceId']);
        }

        // Name, all fields are optional
        $nameItem = new NameItemType();

        if (!empty($this->data['person']['firstName'])) {
            $nameItem->setVorname($this->data['person']['firstName']);
        }
        if (!empty($this->data['person']['lastName'])) {
            $nameItem->setName($this->data['person']['lastName']);
        }
        if (!empty($this->data['person']['salutation'])) {
            $nameItem->setAnrede($this->data['person']['salutation']);
        }
        if (!empty($this->data['person']['company'][0])) {
            $nameItem->setFirma1($this->data['person']['company'][0]);
        }
        if (!empty($this->data['person']['company'][1])) {
            $nameItem->setFirma2($this->data['person']['company'][1]);
        }
        if (!empty($this->data['person']['company'][2])) {
            $nameItem->setFirma3($this->data['person']['company'][2]);
        }
        if (!empty($this->data['person']['prefix'])) {
            $nameItem->setVorsatzwort($this->data['person']['prefix']);
        }
        if (!empty($this->data['person']['suffix'])) {
            $nameItem->setNamenszusatz($this->data['person']['suffix']);
        }
        if (!empty($this->data['person']['academicTitle'])) {
            $nameItem->setTitel($this->data['person']['academicTitle']);
        }
        if (!empty($this->data['person']['titleOfNobility'])) {
            $nameItem->setAdel($this->data['person']['titleOfNobility']);
        }
        if (!empty($this->data['person']['gender'])) {
            $nameItem->setGeschlecht($this->data['person']['gender']);
        }
        if (!empty($this->data['address']['addressAddition'])) {
            $nameItem->setAdresszusatz($this->data['address']['addressAddition']);
        }
        if (!empty($this->data['address']['deliveryInstruction'])) {
            $nameItem->setZustellhinweis($this->data['address']['deliveryInstruction']);
        }
        if (!empty($this->data['person']['postNumber'])) {
            $nameItem->setPsPostNr($this->data['person']['postNumber']);
        }

        $record->setNameItem($nameItem);

        // address container
        $addressItem = new AdrItemType();

        if (!empty($this->data['address'])) {
            // regular address, all fields are optional
            $address = new HausanschriftType();
            if (!empty($this->data['address']['streetName'])) {
                $address->setStrasse(new StrasseType($this->data['address']['streetName']));
            }
            if (!empty($this->data['address']['streetNumber'])) {
                $address->setHausnr($this->data['address']['streetNumber']);
            }
            if (!empty($this->data['address']['streetNumberAddition'])) {
                $address->setHausnrZusatz($this->data['address']['streetNumberAddition']);
            }
            if (!empty($this->data['address']['postalCode'])) {
                $address->setPlz($this->data['address']['postalCode']);
            }
            if (!empty($this->data['address']['city'])) {
                $address->setOrt(new OrtType($this->data['address']['city']));
            }
            if (!empty($this->data['address']['cityAddition'])) {
                $address->setOrtszusatz(new OrtszusatzType($this->data['address']['cityAddition']));
            }
            if (!empty($this->data['address']['urbanDistrict'])) {
                $address->setOrtsteil($this->data['address']['urbanDistrict']);
            }
            if (!empty($this->data['address']['municipality'])) {
                $address->setGemeinde($this->data['address']['municipality']);
            }
            if (!empty($this->data['address']['district'])) {
                $address->setKreis($this->data['address']['district']);
            }
            if (!empty($this->data['address']['region'])) {
                $address->setRegBezirk($this->data['address']['region']);
            }
            if (!empty($this->data['address']['state'])) {
                $address->setBundesland($this->data['address']['state']);
            }
            if (!empty($this->data['address']['country'])) {
                $address->setLand($this->data['address']['country']);
            }
            if (!empty($this->data['address']['routing'])) {
                $routing = new LeitdatenType();
                if (!empty($this->data['address']['routing']['code'])) {
                    $routing->setLeitcode($this->data['address']['routing']['code']);
                }
                if (!empty($this->data['address']['routing']['alOrt'])) {
                    $routing->setAlort($this->data['address']['routing']['alOrt']);
                }
                if (!empty($this->data['address']['routing']['cargoCenter'])) {
                    $routing->setFrachtzentrum($this->data['address']['routing']['cargoCenter']);
                }
                if (!empty($this->data['address']['routing']['streetKey'])) {
                    $routing->setStrSchluessel($this->data['address']['routing']['streetKey']);
                }
                if (!empty($this->data['address']['routing']['districtKey'])) {
                    $routing->setKgs($this->data['address']['routing']['districtKey']);
                }
                $address->setLeitdaten($routing);
            }

            $addressItem->setHausanschrift($address);
        }

        if (!empty($this->data['postfach'])) {
            // postfach address, all fields are optional
            $postfach = new PostfachType();
            if (!empty($this->data['postfach']['number'])) {
                $postfach->setNr($this->data['postfach']['number']);
            }
            if (!empty($this->data['postfach']['postalCode'])) {
                $postfach->setPlz($this->data['postfach']['postalCode']);
            }
            if (!empty($this->data['postfach']['city'])) {
                $postfach->setOrt(new OrtType($this->data['postfach']['city']));
            }
            if (!empty($this->data['postfach']['cityAddition'])) {
                $postfach->setOrtszusatz(new OrtszusatzType($this->data['postfach']['cityAddition']));
            }
            if (!empty($this->data['postfach']['routing'])) {
                $routing = new LeitdatenType();
                if (!empty($this->data['postfach']['routing']['code'])) {
                    $routing->setLeitcode($this->data['postfach']['routing']['code']);
                }
                if (!empty($this->data['postfach']['routing']['alOrt'])) {
                    $routing->setAlort($this->data['postfach']['routing']['alOrt']);
                }
                if (!empty($this->data['postfach']['routing']['cargoCenter'])) {
                    $routing->setFrachtzentrum($this->data['postfach']['routing']['cargoCenter']);
                }
                if (!empty($this->data['postfach']['routing']['streetKey'])) {
                    $routing->setStrSchluessel($this->data['postfach']['routing']['streetKey']);
                }
                if (!empty($this->data['postfach']['routing']['districtKey'])) {
                    $routing->setKgs($this->data['postfach']['routing']['districtKey']);
                }
                $postfach->setLeitdaten($routing);
            }
            $addressItem->setPostfach($postfach);
        }

        if (!empty($this->data['packstation'])) {
            // packstation address, all fields are optional
            $packstation = new PackstationType();
            if (!empty($this->data['packstation']['number'])) {
                $packstation->setNr($this->data['packstation']['number']);
            }
            if (!empty($this->data['packstation']['postalCode'])) {
                $packstation->setPlz($this->data['packstation']['postalCode']);
            }
            if (!empty($this->data['packstation']['city'])) {
                $packstation->setOrt(new OrtType($this->data['packstation']['city']));
            }
            if (!empty($this->data['packstation']['cityAddition'])) {
                $packstation->setOrtszusatz(new OrtszusatzType($this->data['packstation']['cityAddition']));
            }
            if (!empty($this->data['packstation']['state'])) {
                $packstation->setBundesland($this->data['packstation']['state']);
            }
            if (!empty($this->data['packstation']['municipality'])) {
                $packstation->setGemeinde($this->data['packstation']['municipality']);
            }
            if (!empty($this->data['packstation']['district'])) {
                $packstation->setKreis($this->data['packstation']['district']);
            }
            if (!empty($this->data['packstation']['region'])) {
                $packstation->setRegBezirk($this->data['packstation']['region']);
            }
            if (!empty($this->data['packstation']['routing'])) {
                $routing = new LeitdatenType();
                if (!empty($this->data['packstation']['routing']['code'])) {
                    $routing->setLeitcode($this->data['packstation']['routing']['code']);
                }
                if (!empty($this->data['packstation']['routing']['alOrt'])) {
                    $routing->setAlort($this->data['packstation']['routing']['alOrt']);
                }
                if (!empty($this->data['packstation']['routing']['cargoCenter'])) {
                    $routing->setFrachtzentrum($this->data['packstation']['routing']['cargoCenter']);
                }
                if (!empty($this->data['packstation']['routing']['streetKey'])) {
                    $routing->setStrSchluessel($this->data['packstation']['routing']['streetKey']);
                }
                if (!empty($this->data['packstation']['routing']['districtKey'])) {
                    $routing->setKgs($this->data['packstation']['routing']['districtKey']);
                }
                $packstation->setLeitdaten($routing);
            }
            $addressItem->setPackstation($packstation);
        }

        if (!empty($this->data['postfiliale'])) {
            // postfiliale address, all fields are optional
            $postfiliale = new PostfilialeType();
            if (!empty($this->data['postfiliale']['number'])) {
                $postfiliale->setNr($this->data['postfiliale']['number']);
            }
            if (!empty($this->data['postfiliale']['postalCode'])) {
                $postfiliale->setPlz($this->data['postfiliale']['postalCode']);
            }
            if (!empty($this->data['postfiliale']['city'])) {
                $postfiliale->setOrt(new OrtType($this->data['postfiliale']['city']));
            }
            if (!empty($this->data['postfiliale']['cityAddition'])) {
                $postfiliale->setOrtszusatz(new OrtszusatzType($this->data['postfiliale']['cityAddition']));
            }
            if (!empty($this->data['postfiliale']['state'])) {
                $postfiliale->setBundesland($this->data['postfiliale']['state']);
            }
            if (!empty($this->data['postfiliale']['municipality'])) {
                $postfiliale->setGemeinde($this->data['postfiliale']['municipality']);
            }
            if (!empty($this->data['postfiliale']['district'])) {
                $postfiliale->setKreis($this->data['postfiliale']['district']);
            }
            if (!empty($this->data['postfiliale']['region'])) {
                $postfiliale->setRegBezirk($this->data['postfiliale']['region']);
            }
            if (!empty($this->data['postfiliale']['routing'])) {
                $routing = new LeitdatenType();
                if (!empty($this->data['postfiliale']['routing']['code'])) {
                    $routing->setLeitcode($this->data['postfiliale']['routing']['code']);
                }
                if (!empty($this->data['postfiliale']['routing']['alOrt'])) {
                    $routing->setAlort($this->data['postfiliale']['routing']['alOrt']);
                }
                if (!empty($this->data['postfiliale']['routing']['cargoCenter'])) {
                    $routing->setFrachtzentrum($this->data['postfiliale']['routing']['cargoCenter']);
                }
                if (!empty($this->data['postfiliale']['routing']['streetKey'])) {
                    $routing->setStrSchluessel($this->data['postfiliale']['routing']['streetKey']);
                }
                if (!empty($this->data['postfiliale']['routing']['districtKey'])) {
                    $routing->setKgs($this->data['postfiliale']['routing']['districtKey']);
                }
                $postfiliale->setLeitdaten($routing);
            }
            $addressItem->setPostfiliale($postfiliale);
        }

        if (!empty($this->data['ge'])) {
            // corporate address, all fields are optional
            $ge = new GEType();
            if (!empty($this->data['ge']['name'])) {
                $ge->setName($this->data['ge']['name']);
            }
            if (!empty($this->data['ge']['postalCode'])) {
                $ge->setPlz($this->data['ge']['postalCode']);
            }
            if (!empty($this->data['ge']['city'])) {
                $ge->setOrt(new OrtType($this->data['ge']['city']));
            }
            if (!empty($this->data['ge']['cityAddition'])) {
                $ge->setOrtszusatz(new OrtszusatzType($this->data['ge']['cityAddition']));
            }
            if (!empty($this->data['ge']['state'])) {
                $ge->setBundesland($this->data['ge']['state']);
            }
            if (!empty($this->data['ge']['municipality'])) {
                $ge->setGemeinde($this->data['ge']['municipality']);
            }
            if (!empty($this->data['ge']['district'])) {
                $ge->setKreis($this->data['ge']['district']);
            }
            if (!empty($this->data['ge']['region'])) {
                $ge->setRegBezirk($this->data['ge']['region']);
            }
            if (!empty($this->data['ge']['routing'])) {
                $routing = new LeitdatenType();
                if (!empty($this->data['ge']['routing']['code'])) {
                    $routing->setLeitcode($this->data['ge']['routing']['code']);
                }
                if (!empty($this->data['ge']['routing']['alOrt'])) {
                    $routing->setAlort($this->data['ge']['routing']['alOrt']);
                }
                if (!empty($this->data['ge']['routing']['cargoCenter'])) {
                    $routing->setFrachtzentrum($this->data['ge']['routing']['cargoCenter']);
                }
                if (!empty($this->data['ge']['routing']['streetKey'])) {
                    $routing->setStrSchluessel($this->data['ge']['routing']['streetKey']);
                }
                if (!empty($this->data['ge']['routing']['districtKey'])) {
                    $routing->setKgs($this->data['ge']['routing']['districtKey']);
                }
                $ge->setLeitdaten($routing);
            }
            $addressItem->setGE($ge);
        }

        $record->setAdrItem($addressItem);

        // Geographical coordinates
        if (!empty($this->data['coordinates'])) {
            $geoItem = new GeoItemType();

            if (!empty($this->data['coordinates']['latlng'])) {
                $coordinates = new KoordWgs84Type(
                    $this->data['coordinates']['latlng']['latitude'],
                    $this->data['coordinates']['latlng']['longitude']
                );
                $geoItem->setKoordWgs84($coordinates);
            }

            if (!empty($this->data['coordinates']['utm'])) {
                $coordinates = new UtmWgs84Type(
                    $this->data['coordinates']['utm']['easting'],
                    $this->data['coordinates']['utm']['northing']
                );
                $geoItem->setUtmWgs84($coordinates);
            }

            if (!empty($this->data['coordinates']['utm'])) {
                $coordinates = new GkbDhdnType(
                    $this->data['coordinates']['gk']['easting'],
                    $this->data['coordinates']['gk']['northing']
                );
                $geoItem->setGkbDhdn($coordinates);
            }

            $record->setGeoItem($geoItem);
        }

        // Phone numbers
        if (isset($this->data['phoneNumbers']) && is_array($this->data['phoneNumbers'])) {
            $phoneNumbers = array_map(
                function (array $phone) {
                    $nr = new RufnrType($phone['type']);
                    $nr->setOrtsvorwahl($phone['areaCode']);
                    $nr->setDurchwahl($phone['dialNumber']);
                    return $nr;
                },
                $this->data['phoneNumbers']
            );
            $record->setRufnrItem(new RufnrItemType($phoneNumbers));
        }

        // Credit rating
        if (!empty($this->data['rating'])) {
            $record->setGeburtsdatum($this->data['rating']['dateOfBirth']);
            $record->setAnfragegrund($this->data['rating']['reason']);
        }

        // Arbitrary extra fields
        if (isset($this->data['fields']) && is_array($this->data['fields'])) {
            $fields = array_map(
                function (array $data) {
                    return new ExtFieldType($data['value'], $data['key']);
                },
                $this->data['fields']
            );
            $record->setExtFieldItem(new ExtFieldItemType($fields));
        }

        $this->data = [];

        return $record;
    }
}
