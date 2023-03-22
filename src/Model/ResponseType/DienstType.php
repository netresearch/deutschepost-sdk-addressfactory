<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType;

class DienstType extends Durchfuehrbares
{
    private TaetigkeitType $Taetigkeit;

    private BonitaetspruefungType $Bonitaetspruefung;

    private IdentifizierungType $Identifizierung;

    private AnreicherungType $Anreicherung;

    private KorrekturType $Korrektur;

    private InitialAufloesungType $InitialAufloesung;

    private VerschiebungType $Verschiebung;

    private TypAenderungType $TypAenderung;

    private UmstrukturierungType $Umstrukturierung;

    private SeparationType $Separation;

    private ZustellbarkeitspruefungType $Zustellbarkeitspruefung;

    private DublettenpruefungType $Dublettenpruefung;

    private SonstigeTaetigkeitType $SonstigeTaetigkeit;

    private EntfernungType $Entfernung;

    private UmzugspruefungType $Umzugspruefung;

    private GueltigkeitspruefungType $Gueltigkeitspruefung;

    private string $Log;

    private string $name;

    public function getTaetigkeit(): TaetigkeitType
    {
        return $this->Taetigkeit;
    }

    public function getBonitaetspruefung(): BonitaetspruefungType
    {
        return $this->Bonitaetspruefung;
    }

    public function getIdentifizierung(): IdentifizierungType
    {
        return $this->Identifizierung;
    }

    public function getAnreicherung(): AnreicherungType
    {
        return $this->Anreicherung;
    }

    public function getKorrektur(): KorrekturType
    {
        return $this->Korrektur;
    }

    public function getInitialAufloesung(): InitialAufloesungType
    {
        return $this->InitialAufloesung;
    }

    public function getVerschiebung(): VerschiebungType
    {
        return $this->Verschiebung;
    }

    public function getTypAenderung(): TypAenderungType
    {
        return $this->TypAenderung;
    }


    public function getUmstrukturierung(): UmstrukturierungType
    {
        return $this->Umstrukturierung;
    }


    public function getSeparation(): SeparationType
    {
        return $this->Separation;
    }

    public function getZustellbarkeitspruefung(): ZustellbarkeitspruefungType
    {
        return $this->Zustellbarkeitspruefung;
    }


    public function getDublettenpruefung(): DublettenpruefungType
    {
        return $this->Dublettenpruefung;
    }

    public function getSonstigeTaetigkeit(): SonstigeTaetigkeitType
    {
        return $this->SonstigeTaetigkeit;
    }

    public function getEntfernung(): EntfernungType
    {
        return $this->Entfernung;
    }

    public function getUmzugspruefung(): UmzugspruefungType
    {
        return $this->Umzugspruefung;
    }

    public function getGueltigkeitspruefung(): GueltigkeitspruefungType
    {
        return $this->Gueltigkeitspruefung;
    }

    public function getLog(): string
    {
        return $this->Log;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
