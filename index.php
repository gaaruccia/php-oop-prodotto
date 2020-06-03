<?php
    class Prodotto{
        
        public $oggetto;
        public $quantita;
        public $peso;
        public $colore;

        function __construct($oggetto){
            $this->oggetto = $oggetto;
        }

        public function printMe() {
            echo "Oggetto:" . " " . $this->oggetto . " "
                 . "Quantità:" . " " . $this->quantita . " "
                 . "Peso:" .  " " .$this->peso . " "
                 . "Colore:" .  " " .$this->colore . "<br>";
        }
    }
    
    
    $carote = new Prodotto("Carote");
    $carote->quantita = "10";
    $carote->peso = "10kg";
    $carote->colore = "Arancio";

    
    $patate = new Prodotto("Patate");
    $patate->quantita = "15";
    $patate->peso = "15kg";
    $patate->colore = "Giallo";

    
    $pomodori = new Prodotto("Pomodori");
    $pomodori->quantita = "20";
    $pomodori->peso = "20kg";
    $pomodori->colore = "Rosso";

    $carote->printMe();
    $patate->printMe();
    $pomodori->printMe();

?>