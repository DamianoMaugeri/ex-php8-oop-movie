<?php
trait Valutazione {
    public $voti = [];

    public function addValutazione($_voto) {
        $this->voti[] = $_voto;
    }

    public function getValutazioneMedia() {
        if (empty($this->voti)) return "Ancora non è presente una valutazione.";
        return round(array_sum($this->voti) / count($this->voti),1);
    }
}
?>