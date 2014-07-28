<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */

namespace XAPISdk\Data\BusinessObjects;

class Articolo extends ABaseBusinessObject {

    // region -- CONSTANTS --

    const CLASS_NAME = __CLASS__;

    // endregion

    // region -- MEMBERS --

    protected $_codice;
    protected $_codiceEtichetta;
    protected $_codiceFornitore;
    protected $_descrizione;
    protected $_descrizioneEtichetta;
    protected $_fattoreUMCarico;
    protected $_fattoreUMScarico;
    protected $_sottoScorta;
    protected $_minimoMagazzino;
    protected $_allarmeNegativi;
    protected $_allarmeSottoScorta;
    protected $_classeRiordino;
    protected $_gestioneRiordino;
    protected $_pesoLordo;
    protected $_pesoNetto;
    protected $_pesoImballo;
    protected $_volumeImballo;
    protected $_gestioneGiacenza;
    protected $_gestioneValidita;
    protected $_validita;
    protected $_stampaNelListino;
    protected $_note;
    protected $_attivo;

    protected $_unitaMisuraMagazzino;
    protected $_unitaMisuraCarico;
    protected $_unitaMisuraScarico;
    protected $_imballo;
    protected $_tipoArticolo;
    protected $_categoriaMerceologica;
    protected $_marca;
    protected $_iva;
    protected $_listiniPrezzo;
    protected $_giacenzePerDeposito;
    protected $_impegnatoArticolo;

    // endregion

    // region -- GETTERS/SETTERS --

    public function setAllarmeNegativi($allarmeNegativi) {
        $this->_allarmeNegativi = $allarmeNegativi;
    }

    public function getAllarmeNegativi() {
        return $this->_allarmeNegativi;
    }

    public function setAllarmeSottoScorta($allarmeSottoScorta) {
        $this->_allarmeSottoScorta = $allarmeSottoScorta;
    }

    public function getAllarmeSottoScorta() {
        return $this->_allarmeSottoScorta;
    }

    public function setCategoriaMerceologica($categoriaMerceologica) {
        $this->_categoriaMerceologica = $categoriaMerceologica;
    }

    public function getCategoriaMerceologica() {
        $res = $this->_categoriaMerceologica;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setClasseRiordino($classeRiordino) {
        $this->_classeRiordino = $classeRiordino;
    }

    public function getClasseRiordino() {
        return $this->_classeRiordino;
    }

    public function setCodice($codice) {
        $this->_codice = $codice;
    }

    public function getCodice() {
        return $this->_codice;
    }

    public function setCodiceEtichetta($codiceEtichetta) {
        $this->_codiceEtichetta = $codiceEtichetta;
    }

    public function getCodiceEtichetta() {
        return $this->_codiceEtichetta;
    }

    public function setCodiceFornitore($codiceFornitore) {
        $this->_codiceFornitore = $codiceFornitore;
    }

    public function getCodiceFornitore() {
        return $this->_codiceFornitore;
    }

    public function setDescrizione($descrizione) {
        $this->_descrizione = $descrizione;
    }

    public function getDescrizione() {
        return $this->_descrizione;
    }

    public function setDescrizioneEtichetta($descrizioneEtichetta) {
        $this->_descrizioneEtichetta = $descrizioneEtichetta;
    }

    public function getDescrizioneEtichetta() {
        return $this->_descrizioneEtichetta;
    }

    public function setFattoreUMCarico($fattoreUMCarico) {
        $this->_fattoreUMCarico = $fattoreUMCarico;
    }

    public function getFattoreUMCarico() {
        return $this->_fattoreUMCarico;
    }

    public function setFattoreUMScarico($fattoreUMScarico) {
        $this->_fattoreUMScarico = $fattoreUMScarico;
    }

    public function setAttivo($attivo) {
        $this->_attivo = $attivo;
    }

    public function getAttivo() {
        return $this->_attivo;
    }

    public function getFattoreUMScarico() {
        return $this->_fattoreUMScarico;
    }

    public function setGestioneGiacenza($gestioneGiacenza) {
        $this->_gestioneGiacenza = $gestioneGiacenza;
    }

    public function getGestioneGiacenza() {
        return $this->_gestioneGiacenza;
    }

    public function setGestioneRiordino($gestioneRiordino) {
        $this->_gestioneRiordino = $gestioneRiordino;
    }

    public function getGestioneRiordino() {
        return $this->_gestioneRiordino;
    }

    public function setGestioneValidita($gestioneValidita) {
        $this->_gestioneValidita = $gestioneValidita;
    }

    public function getGestioneValidita() {
        return $this->_gestioneValidita;
    }

    public function setImballo($imballo) {
        $this->_imballo = $imballo;
    }

    public function getImballo() {
        $res = $this->_imballo;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setIva($iva) {
        $this->_iva = $iva;
    }

    public function getIva() {
        $res = $this->_iva;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setListiniPrezzo($listiniPrezzo) {
        $this->_listiniPrezzo = $listiniPrezzo;
    }

    public function getListiniPrezzo() {
        $res = $this->_listiniPrezzo;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setMarca($marca) {
        $this->_marca = $marca;
    }

    public function getMarca() {
        $res = $this->_marca;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setMinimoMagazzino($minimoMagazzino) {
        $this->_minimoMagazzino = $minimoMagazzino;
    }

    public function getMinimoMagazzino() {
        return $this->_minimoMagazzino;
    }

    public function setNote($note) {
        $this->_note = $note;
    }

    public function getNote() {
        return $this->_note;
    }

    public function setPesoImballo($pesoImballo) {
        $this->_pesoImballo = $pesoImballo;
    }

    public function getPesoImballo() {
        return $this->_pesoImballo;
    }

    public function setPesoLordo($pesoLordo) {
        $this->_pesoLordo = $pesoLordo;
    }

    public function getPesoLordo() {
        return $this->_pesoLordo;
    }

    public function setPesoNetto($pesoNetto) {
        $this->_pesoNetto = $pesoNetto;
    }

    public function getPesoNetto() {
        return $this->_pesoNetto;
    }

    public function setSottoScorta($sottoScorta) {
        $this->_sottoScorta = $sottoScorta;
    }

    public function getSottoScorta() {
        return $this->_sottoScorta;
    }

    public function setStampaNelListino($stampaNelListino) {
        $this->_stampaNelListino = $stampaNelListino;
    }

    public function getStampaNelListino() {
        return $this->_stampaNelListino;
    }

    public function setTipoArticolo($tipoArticolo) {
        $this->_tipoArticolo = $tipoArticolo;
    }

    public function getTipoArticolo() {
        $res = $this->_tipoArticolo;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setUnitaMisuraCarico($unitaMisuraCarico) {
        $this->_unitaMisuraCarico = $unitaMisuraCarico;
    }

    public function getUnitaMisuraCarico() {
        $res = $this->_unitaMisuraCarico;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setUnitaMisuraMagazzino($unitaMisuraMagazzino) {
        $this->_unitaMisuraMagazzino = $unitaMisuraMagazzino;
    }

    public function getUnitaMisuraMagazzino() {
        $res = $this->_unitaMisuraMagazzino;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setUnitaMisuraScarico($unitaMisuraScarico) {
        $this->_unitaMisuraScarico = $unitaMisuraScarico;
    }

    public function getUnitaMisuraScarico() {
        $res = $this->_unitaMisuraScarico;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setValidita($validita) {
        $this->_validita = $validita;
    }

    public function getValidita() {
        return $this->_validita;
    }

    public function setVolumeImballo($volumeImballo) {
        $this->_volumeImballo = $volumeImballo;
    }

    public function getVolumeImballo() {
        return $this->_volumeImballo;
    }

    public function setGiacenzePerDeposito($giacenzePerDeposito) {
        $this->_giacenzePerDeposito = $giacenzePerDeposito;
    }

    public function getGiacenzePerDeposito() {
        $res = $this->_giacenzePerDeposito;
        $res = $this->delazyField($res);
        return $res;
    }

    public function setImpegnatoArticolo($impegnatoArticolo) {
        $this->_impegnatoArticolo = $impegnatoArticolo;
    }

    public function getImpegnatoArticolo() {
        $res = $this->_impegnatoArticolo;
        $res = $this->delazyField($res);
        return $res;
    }

    // endregion

    // region -- METHODS --

    public function toJson() {
        $toSerialize = array('codice' => $this->serializedField($this->_codice),
            'codiceEtichetta' => $this->serializedField($this->_codiceEtichetta),
            'codiceFornitore' => $this->serializedField($this->_codiceFornitore),
            'descrizione' => $this->serializedField($this->_descrizione),
            'descrizioneEtichetta' => $this->serializedField($this->_descrizioneEtichetta),
            'fattoreUMCarico' => $this->serializedField($this->_fattoreUMCarico),
            'fattoreUMScarico' => $this->serializedField($this->_fattoreUMScarico),
            'sottoScorta' => $this->serializedField($this->_sottoScorta),
            'minimoMagazzino' => $this->serializedField($this->_minimoMagazzino),
            'allarmeNegativi' => $this->serializedField($this->_allarmeNegativi),
            'allarmeSottoScorta' => $this->serializedField($this->_allarmeSottoScorta),
            'classeRiordino' => $this->serializedField($this->_classeRiordino),
            'gestioneRiordino' => $this->serializedField($this->_gestioneRiordino),
            'pesoLordo' => $this->serializedField($this->_pesoLordo),
            'pesoNetto' => $this->serializedField($this->_pesoNetto),
            'pesoImballo' => $this->serializedField($this->_pesoImballo),
            'volumeImballo' => $this->serializedField($this->_volumeImballo),
            'gestioneGiacenza' => $this->serializedField($this->_gestioneGiacenza),
            'gestioneValidita' => $this->serializedField($this->_gestioneValidita),
            'validita' => $this->serializedField($this->_validita),
            'stampaNelListino' => $this->serializedField($this->_stampaNelListino),
            'note' => $this->serializedField($this->_note),
            'unitaMisuraMagazzino' => $this->serializedField($this->_unitaMisuraMagazzino),
            'unitaMisuraCarico' => $this->serializedField($this->_unitaMisuraCarico),
            'unitaMisuraScarico' => $this->serializedField($this->_unitaMisuraScarico),
            'imballo' => $this->serializedField($this->_imballo),
            'tipoArticolo' => $this->serializedField($this->_tipoArticolo),
            'categoriaMerceologica' => $this->serializedField($this->_categoriaMerceologica),
            'marca' => $this->serializedField($this->_marca),
            'iva' => $this->serializedField($this->_iva),
            'attivo' => $this->serializedField($this->_attivo));

        return json_encode($toSerialize);
    }

    protected function setFieldsFromJsonObj($jsonObj) {

        if (isset($jsonObj->codice))
            $this->setCodice($jsonObj->codice);

        if (isset($jsonObj->attivo))
            $this->setAttivo($jsonObj->attivo);

        if (isset($jsonObj->codiceEtichetta))
            $this->setCodiceEtichetta($jsonObj->codiceEtichetta);

        if (isset($jsonObj->codiceFornitore))
            $this->setCodiceFornitore($jsonObj->codiceFornitore);

        if (isset($jsonObj->descrizione))
            $this->setDescrizione($jsonObj->descrizione);

        if (isset($jsonObj->descrizioneEtichetta))
            $this->setDescrizioneEtichetta($jsonObj->descrizioneEtichetta);

        if (isset($jsonObj->fattoreUMCarico))
            $this->setFattoreUMCarico($jsonObj->fattoreUMCarico);

        if (isset($jsonObj->fattoreUMScarico))
            $this->setFattoreUMScarico($jsonObj->fattoreUMScarico);

        if (isset($jsonObj->sottoScorta))
            $this->setSottoScorta($jsonObj->sottoScorta);

        if (isset($jsonObj->minimoMagazzino))
            $this->setMinimoMagazzino($jsonObj->minimoMagazzino);

        if (isset($jsonObj->allarmeNegativi))
            $this->setAllarmeNegativi($jsonObj->allarmeNegativi);

        if (isset($jsonObj->allarmeSottoScorta))
            $this->setAllarmeSottoScorta($jsonObj->allarmeSottoScorta);

        if (isset($jsonObj->classeRiordino))
            $this->setClasseRiordino($jsonObj->classeRiordino);

        if (isset($jsonObj->gestioneRiordino))
            $this->setGestioneRiordino($jsonObj->gestioneRiordino);

        if (isset($jsonObj->pesoLordo))
            $this->setPesoLordo($jsonObj->pesoLordo);

        if (isset($jsonObj->pesoNetto))
            $this->setPesoNetto($jsonObj->pesoNetto);

        if (isset($jsonObj->pesoImballo))
            $this->setPesoImballo($jsonObj->pesoImballo);

        if (isset($jsonObj->volumeImballo))
            $this->setVolumeImballo($jsonObj->volumeImballo);

        if (isset($jsonObj->gestioneGiacenza))
            $this->setGestioneGiacenza($jsonObj->gestioneGiacenza);

        if (isset($jsonObj->gestioneValidita))
            $this->setGestioneValidita($jsonObj->gestioneValidita);

        if (isset($jsonObj->validita))
            $this->setValidita($jsonObj->validita);

        if (isset($jsonObj->stampaNelListino))
            $this->setStampaNelListino($jsonObj->stampaNelListino);

        if (isset($jsonObj->note))
            $this->setNote($jsonObj->note);

        if (isset($jsonObj->unitaMisuraMagazzino))
            $this->setUnitaMisuraMagazzino(UnitaMisura::fromJson($jsonObj->unitaMisuraMagazzino, $this->_xapiClient));

        if (isset($jsonObj->unitaMisuraCarico))
            $this->setUnitaMisuraCarico(UnitaMisura::fromJson($jsonObj->unitaMisuraCarico, $this->_xapiClient));

        if (isset($jsonObj->unitaMisuraScarico))
            $this->setUnitaMisuraScarico(UnitaMisura::fromJson($jsonObj->unitaMisuraScarico, $this->_xapiClient));

        if (isset($jsonObj->imballo))
            $this->setImballo(Imballo::fromJson($jsonObj->imballo, $this->_xapiClient));

        if (isset($jsonObj->tipoArticolo))
            $this->setTipoArticolo(TipoArticolo::fromJson($jsonObj->tipoArticolo, $this->_xapiClient));

        if (isset($jsonObj->categoriaMerceologica))
            $this->setCategoriaMerceologica(CategoriaMerceologica::fromJson($jsonObj->categoriaMerceologica, $this->_xapiClient));

        if (isset($jsonObj->marca))
            $this->setMarca(Marca::fromJson($jsonObj->marca, $this->_xapiClient));

        if (isset($jsonObj->iva))
            $this->setIva(Iva::fromJson($jsonObj->iva, $this->_xapiClient));

        if (isset($jsonObj->impegnatoArticolo))
            $this->setImpegnatoArticolo(ImpegnatoArticolo::fromJson($jsonObj->impegnatoArticolo, $this->_xapiClient));

        if (isset($jsonObj->listiniPrezzo) && is_array($jsonObj->listiniPrezzo)) {
            $listini = array();

            foreach($jsonObj->listiniPrezzo as $listObj) {
                $listini[] = ListinoPrezzo::fromJson($listObj, $this->_xapiClient);
            }

            $this->setListiniPrezzo($listini);
        }

        if (isset($jsonObj->giacenzePerDeposito) && is_array($jsonObj->giacenzePerDeposito)) {
            $giacenze = array();

            foreach($jsonObj->giacenzePerDeposito as $giacObj) {
                $giacenze[] = GiacenzaPerDeposito::fromJson($giacObj, $this->_xapiClient);
            }

            $this->setGiacenzePerDeposito($giacenze);
        }
    }

    public static function getResourceName() {
        return 'articoli';
    }

    // endregion

}