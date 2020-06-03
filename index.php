<?php
    class Prodotto{
        
        public $quantita;
        public $peso;
        public $colore;

        function __construct($quantita){
            $this -> quantita = $quantita;
        }
    }
    
    
    $carote = new Prodotto(10);
    $carote->peso = "10kg";
    $carote->colore = "Arancio";
    echo "Quantià Carote:" . " " . $carote->quantita . " " . "Peso Carote:" . " " . $carote->peso . " " . "Colore Carote:" . " " . $carote->colore;
    echo "<br>";

    $patate = new Prodotto(15);
    $patate->peso = "15kg";
    $patate->colore = "Giallo";
    echo "Quantià Patate:" . " " . $patate->quantita . " " . "Peso Patate:" . " " . $patate->peso . " " . "Colore Patate:" . " " . $patate->colore;
    echo "<br>"; 
    
    
    $pomodori = new Prodotto(20);
    $pomodori->peso = "20kg";
    $pomodori->colore = "Rosso";
    echo "Quantià Pomodori:" . " " . $pomodori->quantita . " " . "Peso Pomodori:" . " " . $pomodori->peso . " " . "Colore Pomodori:" . " " . $pomodori->colore;
?>