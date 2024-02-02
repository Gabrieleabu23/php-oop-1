<?php
class Movie{
    public $title;
    public $genere;
    public $year;
    public function __construct($title,$genere,$year) {

        $this -> title = $title;
        $this -> genere = $genere;
        $this -> year = $year;
    }
    public function getMovie() {
        echo "Titolo: {$this->title} <br>";    
        if (is_array($this->genere)) {
            echo "Genere: " . implode(', ', $this->genere) . "<br>";
        } else {
            echo "Genere: {$this->genere}<br>";
        }
        echo "Anno: {$this->year}<br>";
    }

}
