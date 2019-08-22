<?php
    class Auto {
        private $tankinTilavuus;
        private $bensanMaara;
        public $merkki;

        public function __construct($tilavuutta, $bensaa) {
            $this->tankinTilavuus = $tilavuutta;
            $this->bensanMaara = $bensaa;
            $this->merkki = "Audi";
            $this->vuosimalli = 2015;
        }

        public function tulostaTankki(){
            echo "Auton tankin tilavuus on " .$this->tankinTilavuus . ".<br>";
        }

        public function kaynnisty() {
            echo "Auto on käynnissä! Tankin tilavuus on " . $this->tankinTilavuus . " litraa ja bensaa on jäljellä " . $this->bensanMaara . " litraa.<br>";
        }

        public function aja() {
            $this->bensanMaara = $this->bensanMaara - 1;
            return "Käynnistit auton, tankissa on nyt jäljellä " . $this->bensanMaara . " litraa bensaa.<br>";
        }

        public function lisaaBensaa($maara) {
            $enemmanBensaa = $this->bensanMaara + $maara;
            return  "Tankissa on nyt " . $enemmanBensaa . " litraa bensaa.<br>";
        }

        public function sammuta() {
            return "Auto on nyt sammutettu.<br>";
        }

        public function tulostaTiedot() {
            return "Auto on " . $this->merkki . " vuodelta " . $this->vuosimalli . ". Sen tankin tilavuus on " . $this->tankinTilavuus . " ja bensaa on jäljellä vielä " . $this->bensanMaara . ".<br>";
        }
}
?>
