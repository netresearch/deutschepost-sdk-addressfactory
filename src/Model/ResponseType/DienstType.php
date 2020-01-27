<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class DienstType extends Durchfuehrbares
{
    /**
     * @var TaetigkeitType $Taetigkeit
     */
    protected $Taetigkeit;

    /**
     * @var BonitaetspruefungType $Bonitaetspruefung
     */
    protected $Bonitaetspruefung;

    /**
     * @var IdentifizierungType $Identifizierung
     */
    protected $Identifizierung;

    /**
     * @var AnreicherungType $Anreicherung
     */
    protected $Anreicherung;

    /**
     * @var KorrekturType $Korrektur
     */
    protected $Korrektur;

    /**
     * @var InitialAufloesungType $InitialAufloesung
     */
    protected $InitialAufloesung;

    /**
     * @var VerschiebungType $Verschiebung
     */
    protected $Verschiebung;

    /**
     * @var TypAenderungType $TypAenderung
     */
    protected $TypAenderung;

    /**
     * @var UmstrukturierungType $Umstrukturierung
     */
    protected $Umstrukturierung;

    /**
     * @var SeparationType $Separation
     */
    protected $Separation;

    /**
     * @var ZustellbarkeitspruefungType $Zustellbarkeitspruefung
     */
    protected $Zustellbarkeitspruefung;

    /**
     * @var DublettenpruefungType $Dublettenpruefung
     */
    protected $Dublettenpruefung;

    /**
     * @var SonstigeTaetigkeitType $SonstigeTaetigkeit
     */
    protected $SonstigeTaetigkeit;

    /**
     * @var EntfernungType $Entfernung
     */
    protected $Entfernung;

    /**
     * @var UmzugspruefungType $Umzugspruefung
     */
    protected $Umzugspruefung;

    /**
     * @var GueltigkeitspruefungType $Gueltigkeitspruefung
     */
    protected $Gueltigkeitspruefung;

    /**
     * @var string $Log
     */
    protected $Log;

    /**
     * @var string $name
     */
    protected $name;

    /**
     * @return TaetigkeitType
     */
    public function getTaetigkeit(): TaetigkeitType
    {
        return $this->Taetigkeit;
    }

    /**
     * @return BonitaetspruefungType
     */
    public function getBonitaetspruefung(): BonitaetspruefungType
    {
        return $this->Bonitaetspruefung;
    }

    /**
     * @return IdentifizierungType
     */
    public function getIdentifizierung(): IdentifizierungType
    {
        return $this->Identifizierung;
    }

    /**
     * @return AnreicherungType
     */
    public function getAnreicherung(): AnreicherungType
    {
        return $this->Anreicherung;
    }

    /**
     * @return KorrekturType
     */
    public function getKorrektur(): KorrekturType
    {
        return $this->Korrektur;
    }

    /**
     * @return InitialAufloesungType
     */
    public function getInitialAufloesung(): InitialAufloesungType
    {
        return $this->InitialAufloesung;
    }

    /**
     * @return VerschiebungType
     */
    public function getVerschiebung(): VerschiebungType
    {
        return $this->Verschiebung;
    }

    /**
     * @return TypAenderungType
     */
    public function getTypAenderung(): TypAenderungType
    {
        return $this->TypAenderung;
    }


    /**
     * @return UmstrukturierungType
     */
    public function getUmstrukturierung(): UmstrukturierungType
    {
        return $this->Umstrukturierung;
    }


    /**
     * @return SeparationType
     */
    public function getSeparation(): SeparationType
    {
        return $this->Separation;
    }

    /**
     * @return ZustellbarkeitspruefungType
     */
    public function getZustellbarkeitspruefung(): ZustellbarkeitspruefungType
    {
        return $this->Zustellbarkeitspruefung;
    }


    /**
     * @return DublettenpruefungType
     */
    public function getDublettenpruefung(): DublettenpruefungType
    {
        return $this->Dublettenpruefung;
    }

    /**
     * @return SonstigeTaetigkeitType
     */
    public function getSonstigeTaetigkeit(): SonstigeTaetigkeitType
    {
        return $this->SonstigeTaetigkeit;
    }

    /**
     * @return EntfernungType
     */
    public function getEntfernung(): EntfernungType
    {
        return $this->Entfernung;
    }

    /**
     * @return UmzugspruefungType
     */
    public function getUmzugspruefung(): UmzugspruefungType
    {
        return $this->Umzugspruefung;
    }

    /**
     * @return GueltigkeitspruefungType
     */
    public function getGueltigkeitspruefung(): GueltigkeitspruefungType
    {
        return $this->Gueltigkeitspruefung;
    }

    /**
     * @return string
     */
    public function getLog(): string
    {
        return $this->Log;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
