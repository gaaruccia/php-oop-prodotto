<?php
    class Prodotto{
        
        public $quantita;
        public $peso;
        public $colore;

        function __construct($quantita){
            $this->quantita = $quantita;
        }

        public function printMe() {
            echo "Quantità:" . $this->quantita . " "
                 . "Peso:" . $this->peso . " "
                 . "Colore:" . $this->colore . "<br>";
        }
    }
    
    
    $carote = new Prodotto(10);
    $carote->peso = "10kg";
    $carote->colore = "Arancio";

    
    $patate = new Prodotto(15);
    $patate->peso = "15kg";
    $patate->colore = "Giallo";

    
    $pomodori = new Prodotto(20);
    $pomodori->peso = "20kg";
    $pomodori->colore = "Rosso";

    $carote->printMe();
    $patate->printMe();
    $pomodori->printMe();

?>