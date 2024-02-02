<?php 
// DEBUG PER LEGGERE IL FILE IN LOCALHOST
// echo "Hello world!";
include "db.php";
include __DIR__."/Models/Movie.php";

foreach ($arrayFilms as $film) {
    $movie = new Movie(...$film);
    $movie->getMovie();
    echo "<br>--------------------------------------------<br>";
}
?>