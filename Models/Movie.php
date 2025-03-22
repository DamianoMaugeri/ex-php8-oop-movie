<?php
class Movie {

    use Valutazione;

    public $titolo;
    public $durata;
    public $lingua;
    public $sottotitoli;
   
    public $generi = [];

    public function __construct($_titolo,$_durata,$_lingua,$_sottotitoli, array $_generi ){
        $this->titolo = $_titolo;
        $this->durata = $_durata;
        $this->lingua = $_lingua;
        $this->sottotitoli = $_sottotitoli;
        $this->generi = $_generi;

    }

    public function isSubtitled(){
        return $this->sottotitoli;
    }

    public function getMinRequiredAge() {
        if (empty($this->generi)) {
            return 0; 
        }

        
        $minAges = array_map(fn($genere) => $genere->minEta, $this->generi);
        return max($minAges);
    }





}




?>