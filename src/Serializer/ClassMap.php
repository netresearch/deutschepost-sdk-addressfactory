<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Serializer;

use PostDirekt\Sdk\AddressfactoryDirect\Model\CloseSessionRequest;
use PostDirekt\Sdk\AddressfactoryDirect\Model\CloseSessionResponse;
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
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\RecordType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\RufnrItemType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\RufnrType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\StrasseType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\Common\UtmWgs84Type;
use PostDirekt\Sdk\AddressfactoryDirect\Model\OpenSessionRequest;
use PostDirekt\Sdk\AddressfactoryDirect\Model\OpenSessionResponse;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ProcessDataRequest;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ProcessDataResponse;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ProcessSimpleDataRequest;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ProcessSimpleDataResponse;
use PostDirekt\Sdk\AddressfactoryDirect\Model\RequestType\InRecordWSType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\RequestType\SimpleInRecordWSType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\AnreicherungType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\AttributBearbeitungRestriction;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\AttributRefType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\BearbeitungType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\BonitaetspruefungType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\DienstType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\DublettenpruefungRestriction;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\DublettenpruefungType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\Durchfuehrbares;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\ElementRefType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\EntfernungType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\Fehler;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\FehlerType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\FehltrefferType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\GeschlossenerZeitraumType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\GruppeninfoType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\GueltigkeitspruefungType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\IdentifizierungType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\InitialAufloesungRestriction;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\InitialAufloesungType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\KategorieType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\KopfdubletteType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\KorrekturType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\MicrodialogAttributType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\MicrodialogElementType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\MicrodialogItemType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\ModuleCodesType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\ModuleStatusType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\MoveSourceType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\OutRecordType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\OutRecordWSType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\PreisType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\PruefungType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\Quelle;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\SeparationRestriction;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\SeparationType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\SonstigeTaetigkeitType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\StatusCodeItemType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\StatusItemType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\TaetigkeitType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\TechStatusType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\TypAenderungRestriction;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\TypAenderungType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\UmstrukturierungType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\UmzugspruefungType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\VerschiebungRestriction;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\VerschiebungType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\Ziel;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\ZusatzInfoType;
use PostDirekt\Sdk\AddressfactoryDirect\Model\ResponseType\ZustellbarkeitspruefungType;

class ClassMap
{
    /**
     * Map WSDL types to PHP classes.
     *
     * @return string[]
     */
    public static function get(): array
    {
        return [
            // Requests
            'openSession' => OpenSessionRequest::class,
            'closeSession' => CloseSessionRequest::class,
            'processData' => ProcessDataRequest::class,
            'processSimpleData' => ProcessSimpleDataRequest::class,

            // Responses
            'openSessionResponse' => OpenSessionResponse::class,
            'closeSessionResponse' => CloseSessionResponse::class,
            'processDataResponse' => ProcessDataResponse::class,
            'processSimpleDataResponse' => ProcessSimpleDataResponse::class,

            // Request types
            'SimpleInRecordWSType' => SimpleInRecordWSType::class,
            'InRecordWSType' => InRecordWSType::class,

            // Shared types
            'AdrItemType' => AdrItemType::class,
            'ExtFieldItemType' => ExtFieldItemType::class,
            'ExtFieldType' => ExtFieldType::class,
            'GeoItemType' => GeoItemType::class,
            'GkbDhdnType' => GkbDhdnType::class,
            'HausanschriftType' => HausanschriftType::class,
            'KoordWgs84Type' => KoordWgs84Type::class,
            'LeitdatenType' => LeitdatenType::class,
            'NameItemType' => NameItemType::class,
            'OrtszusatzType' => OrtszusatzType::class,
            'OrtType' => OrtType::class,
            'PackstationType' => PackstationType::class,
            'PostfachType' => PostfachType::class,
            'PostfilialeType' => PostfilialeType::class,
            'RecordType' => RecordType::class,
            'RufnrItemType' => RufnrItemType::class,
            'RufnrType' => RufnrType::class,
            'StrasseType' => StrasseType::class,
            'UtmWgs84Type' => UtmWgs84Type::class,

            // Response types
            'AnreicherungType' => AnreicherungType::class,
            'AttributBearbeitungRestriction' => AttributBearbeitungRestriction::class,
            'AttributRefType' => AttributRefType::class,
            'BearbeitungType' => BearbeitungType::class,
            'BonitaetspruefungType' => BonitaetspruefungType::class,
            'DienstType' => DienstType::class,
            'DublettenpruefungRestriction' => DublettenpruefungRestriction::class,
            'DublettenpruefungType' => DublettenpruefungType::class,
            'Durchfuehrbares' => Durchfuehrbares::class,
            'ElementRefType' => ElementRefType::class,
            'EntfernungType' => EntfernungType::class,
            'Fehler' => Fehler::class,
            'FehlerType' => FehlerType::class,
            'FehltrefferType' => FehltrefferType::class,
            'GEType' => GEType::class,
            'GeschlossenerZeitraumType' => GeschlossenerZeitraumType::class,
            'GruppeninfoType' => GruppeninfoType::class,
            'GueltigkeitspruefungType' => GueltigkeitspruefungType::class,
            'IdentifizierungType' => IdentifizierungType::class,
            'InitialAufloesungRestriction' => InitialAufloesungRestriction::class,
            'InitialAufloesungType' => InitialAufloesungType::class,
            'KategorieType' => KategorieType::class,
            'KopfdubletteType' => KopfdubletteType::class,
            'KorrekturType' => KorrekturType::class,
            'MicrodialogAttributType' => MicrodialogAttributType::class,
            'MicrodialogElementType' => MicrodialogElementType::class,
            'MicrodialogItemType' => MicrodialogItemType::class,
            'ModuleCodesType' => ModuleCodesType::class,
            'ModuleStatusType' => ModuleStatusType::class,
            'MoveSourceType' => MoveSourceType::class,
            'OutRecordType' => OutRecordType::class,
            'OutRecordWSType' => OutRecordWSType::class,
            'PreisType' => PreisType::class,
            'PruefungType' => PruefungType::class,
            'Quelle' => Quelle::class,
            'SeparationRestriction' => SeparationRestriction::class,
            'SeparationType' => SeparationType::class,
            'SonstigeTaetigkeitType' => SonstigeTaetigkeitType::class,
            'StatusCodeItemType' => StatusCodeItemType::class,
            'StatusItemType' => StatusItemType::class,
            'TaetigkeitType' => TaetigkeitType::class,
            'TechStatusType' => TechStatusType::class,
            'TypAenderungRestriction' => TypAenderungRestriction::class,
            'TypAenderungType' => TypAenderungType::class,
            'UmstrukturierungType' => UmstrukturierungType::class,
            'UmzugspruefungType' => UmzugspruefungType::class,
            'VerschiebungRestriction' => VerschiebungRestriction::class,
            'VerschiebungType' => VerschiebungType::class,
            'Ziel' => Ziel::class,
            'ZusatzInfoType' => ZusatzInfoType::class,
            'ZustellbarkeitspruefungType' => ZustellbarkeitspruefungType::class,
        ];
    }
}
