<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class NameItemType
{
    /**
     * @var string $Geschlecht
     */
    protected $Geschlecht;

    /**
     * @var string $Anrede
     */
    protected $Anrede;

    /**
     * @var string $Titel
     */
    protected $Titel;

    /**
     * @var string $Adel
     */
    protected $Adel;

    /**
     * @var string $Vorname
     */
    protected $Vorname;

    /**
     * @var string $Vorsatzwort
     */
    protected $Vorsatzwort;

    /**
     * @var string $Name
     */
    protected $Name;

    /**
     * @var string $Namenszusatz
     */
    protected $Namenszusatz;

    /**
     * @var string $Firma1
     */
    protected $Firma1;

    /**
     * @var string $Firma2
     */
    protected $Firma2;

    /**
     * @var string $Firma3
     */
    protected $Firma3;

    /**
     * @var string $Adresszusatz
     */
    protected $Adresszusatz;

    /**
     * @var string $Zustellhinweis
     */
    protected $Zustellhinweis;

    /**
     * @var string $PsPostNr
     */
    protected $PsPostNr;

    /**
     * @return string
     */
    public function getGeschlecht(): string
    {
        return $this->Geschlecht;
    }

    /**
     * @param string $Geschlecht
     *
     * @return NameItemType
     */
    public function setGeschlecht(string $Geschlecht): NameItemType
    {
        $this->Geschlecht = $Geschlecht;
        return $this;
    }

    /**
     * @return string
     */
    public function getAnrede(): string
    {
        return $this->Anrede;
    }

    /**
     * @param string $Anrede
     *
     * @return NameItemType
     */
    public function setAnrede(string $Anrede): NameItemType
    {
        $this->Anrede = $Anrede;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitel(): string
    {
        return $this->Titel;
    }

    /**
     * @param string $Titel
     *
     * @return NameItemType
     */
    public function setTitel(string $Titel): NameItemType
    {
        $this->Titel = $Titel;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdel(): string
    {
        return $this->Adel;
    }

    /**
     * @param string $Adel
     *
     * @return NameItemType
     */
    public function setAdel(string $Adel): NameItemType
    {
        $this->Adel = $Adel;
        return $this;
    }

    /**
     * @return string
     */
    public function getVorname(): string
    {
        return $this->Vorname;
    }

    /**
     * @param string $Vorname
     *
     * @return NameItemType
     */
    public function setVorname(string $Vorname): NameItemType
    {
        $this->Vorname = $Vorname;
        return $this;
    }

    /**
     * @return string
     */
    public function getVorsatzwort(): string
    {
        return $this->Vorsatzwort;
    }

    /**
     * @param string $Vorsatzwort
     *
     * @return NameItemType
     */
    public function setVorsatzwort(string $Vorsatzwort): NameItemType
    {
        $this->Vorsatzwort = $Vorsatzwort;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     *
     * @return NameItemType
     */
    public function setName(string $Name): NameItemType
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return string
     */
    public function getNamenszusatz(): string
    {
        return $this->Namenszusatz;
    }

    /**
     * @param string $Namenszusatz
     *
     * @return NameItemType
     */
    public function setNamenszusatz(string $Namenszusatz): NameItemType
    {
        $this->Namenszusatz = $Namenszusatz;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirma1(): string
    {
        return $this->Firma1;
    }

    /**
     * @param string $Firma1
     *
     * @return NameItemType
     */
    public function setFirma1(string $Firma1): NameItemType
    {
        $this->Firma1 = $Firma1;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirma2(): string
    {
        return $this->Firma2;
    }

    /**
     * @param string $Firma2
     *
     * @return NameItemType
     */
    public function setFirma2(string $Firma2): NameItemType
    {
        $this->Firma2 = $Firma2;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirma3(): string
    {
        return $this->Firma3;
    }

    /**
     * @param string $Firma3
     *
     * @return NameItemType
     */
    public function setFirma3(string $Firma3): NameItemType
    {
        $this->Firma3 = $Firma3;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdresszusatz(): string
    {
        return $this->Adresszusatz;
    }

    /**
     * @param string $Adresszusatz
     *
     * @return NameItemType
     */
    public function setAdresszusatz(string $Adresszusatz): NameItemType
    {
        $this->Adresszusatz = $Adresszusatz;
        return $this;
    }

    /**
     * @return string
     */
    public function getZustellhinweis(): string
    {
        return $this->Zustellhinweis;
    }

    /**
     * @param string $Zustellhinweis
     *
     * @return NameItemType
     */
    public function setZustellhinweis(string $Zustellhinweis): NameItemType
    {
        $this->Zustellhinweis = $Zustellhinweis;
        return $this;
    }

    /**
     * @return string
     */
    public function getPsPostNr(): string
    {
        return $this->PsPostNr;
    }

    /**
     * @param string $PsPostNr
     *
     * @return NameItemType
     */
    public function setPsPostNr(string $PsPostNr): NameItemType
    {
        $this->PsPostNr = $PsPostNr;
        return $this;
    }
}
