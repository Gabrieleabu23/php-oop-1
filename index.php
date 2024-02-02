<?php 
// DEBUG PER LEGGERE IL FILE IN LOCALHOST
// echo "Hello world!";

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

$Movie1= new Movie("boh, non lo so ","Drammatico",2020);

$Movie1->getMovie();
echo "<br>--------------------------------------------<br>";
$Movie2 = new Movie("Il dramma", ["Fantasy", "Azione", "Avventuira"], 1998);

$Movie2->getMovie();
?>