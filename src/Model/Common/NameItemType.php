<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\Common;

class NameItemType
{
    private ?string $Geschlecht = null;

    private ?string $Anrede = null;

    private ?string $Titel = null;

    private ?string $Adel = null;

    private ?string $Vorname = null;

    private ?string $Vorsatzwort = null;

    private ?string $Name = null;

    private ?string $Namenszusatz = null;

    private ?string $Firma1 = null;

    private ?string $Firma2 = null;

    private ?string $Firma3 = null;

    private ?string $Adresszusatz = null;

    private ?string $Zustellhinweis = null;

    private ?string $PsPostNr = null;

    public function getGeschlecht(): string
    {
        return (string) $this->Geschlecht;
    }

    public function setGeschlecht(string $Geschlecht): NameItemType
    {
        $this->Geschlecht = $Geschlecht;
        return $this;
    }

    public function getAnrede(): string
    {
        return (string) $this->Anrede;
    }

    public function setAnrede(string $Anrede): NameItemType
    {
        $this->Anrede = $Anrede;
        return $this;
    }

    public function getTitel(): string
    {
        return (string) $this->Titel;
    }

    public function setTitel(string $Titel): NameItemType
    {
        $this->Titel = $Titel;
        return $this;
    }

    public function getAdel(): string
    {
        return (string) $this->Adel;
    }

    public function setAdel(string $Adel): NameItemType
    {
        $this->Adel = $Adel;
        return $this;
    }

    public function getVorname(): string
    {
        return (string) $this->Vorname;
    }

    public function setVorname(string $Vorname): NameItemType
    {
        $this->Vorname = $Vorname;
        return $this;
    }

    public function getVorsatzwort(): string
    {
        return (string) $this->Vorsatzwort;
    }

    public function setVorsatzwort(string $Vorsatzwort): NameItemType
    {
        $this->Vorsatzwort = $Vorsatzwort;
        return $this;
    }

    public function getName(): string
    {
        return (string) $this->Name;
    }

    public function setName(string $Name): NameItemType
    {
        $this->Name = $Name;
        return $this;
    }

    public function getNamenszusatz(): string
    {
        return (string) $this->Namenszusatz;
    }

    public function setNamenszusatz(string $Namenszusatz): NameItemType
    {
        $this->Namenszusatz = $Namenszusatz;
        return $this;
    }

    public function getFirma1(): string
    {
        return (string) $this->Firma1;
    }

    public function setFirma1(string $Firma1): NameItemType
    {
        $this->Firma1 = $Firma1;
        return $this;
    }

    public function getFirma2(): string
    {
        return (string) $this->Firma2;
    }

    public function setFirma2(string $Firma2): NameItemType
    {
        $this->Firma2 = $Firma2;
        return $this;
    }

    public function getFirma3(): string
    {
        return (string) $this->Firma3;
    }

    public function setFirma3(string $Firma3): NameItemType
    {
        $this->Firma3 = $Firma3;
        return $this;
    }

    public function getAdresszusatz(): string
    {
        return (string) $this->Adresszusatz;
    }

    public function setAdresszusatz(string $Adresszusatz): NameItemType
    {
        $this->Adresszusatz = $Adresszusatz;
        return $this;
    }

    public function getZustellhinweis(): string
    {
        return (string) $this->Zustellhinweis;
    }

    public function setZustellhinweis(string $Zustellhinweis): NameItemType
    {
        $this->Zustellhinweis = $Zustellhinweis;
        return $this;
    }

    public function getPsPostNr(): string
    {
        return (string) $this->PsPostNr;
    }

    public function setPsPostNr(string $PsPostNr): NameItemType
    {
        $this->PsPostNr = $PsPostNr;
        return $this;
    }
}
