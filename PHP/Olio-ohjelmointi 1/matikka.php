<?php
// Ensimmäinen tapa:
    class Matikka {
        public $kilokalori;
        public $joulet;
        public $ympyranSade;
        public $sivu1;
        public $sivu2;
        public $celcius;
        public $radiaanit;
        public $asteet;

        public function __construct($kKalori, $joule, $ySade, $s1, $s2, $c, $radiaani, $aste) {
            $this->kilokalori = $kKalori;
            $this->joulet = $joule;
            $this->ympyranSade = $ySade;
            $this->sivu1 = $s1;
            $this->sivu2 = $s2;
            $this->celcius = $c;
            $this->radiaanit = $radiaani;
            $this->asteet = $aste;
        }

        public function suorakulmionPintaala() {
            return $this->sivu1 * $this->sivu2;
        }

        public function ympyranPintaala() {
            return 2 * pi() * $this->ympyranSade;
        }

        public function kaloritJouleiksi() {
            return $this->kilokalori * 4.1855;
        }

        public function jouletKaloreiksi() {
            return $this->joulet * 0.239005736;
        }

        public function celciusToFahrenheit() {
            return $this->celcius * 9/5 + 32;
        }

        public function radiaanitAsteiksi() {
            return rad2deg($this->radiaanit); 
        }

        public function asteetRadiaaneiksi() {
            return deg2rad($this->asteet);
        }

}

// Toinen tapa:

class Matikka2 {
        // Metodi, joka muuttaa kalorit jouleiksi:
        public function energiaMuunnin1($kcal) {
            echo $kcal . " kaloria on " . $kcal * 4.1855 . " joulea.<br>";
        }
        // Metodi, joka muuttaa joulet kaloreiksi:
        public function energiaMuunnin2($j) {
            echo $j . " joulea on " . $j * 0.239005736 . " kaloria.<br>";
        }

        public function suorakulmio($x, $y) {
            echo "Tontin, jonka lyhyempi sivu on " . $x . " metriä ja pitkä sivu " . $y . " metriä pinta-ala on " . $x * $y . ".<br>";
        }

        public function ympyra($r) {
            echo "Ympyrä, jonka säde on " . $r . ", on pinta-alaltaan " . 2 * pi() * $r . ".<br>";
        }
        // Metodi, joka muuttaa celcius-asteet Fahrenheit-asteiksi:
        public function lampotila($c) {
            echo $c . " astetta Celciusta on " . ($c * 9/5 + 32) . " Fahrenheit-astetta.<br>";
        }
        // Metodi, joka muuttaa radiaanit asteiksi:
        public function asteiksi($rad) {
            echo $rad . " radiaania on " . rad2deg($rad) . " astetta.<br>"; 
        }
        // Metodi, joka muuttaa asteet radiaaneiksi:
        public function radiaaneiksi($deg) {
            echo $deg . " astetta on " . deg2rad($deg) . " radiaania.<br>";
        }
    }
?>
