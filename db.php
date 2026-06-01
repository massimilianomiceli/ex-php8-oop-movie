<?php

require_once("./Models/Traits/Rating.php");
require_once("./Models/Genre.php");
require_once("./Models/Movie.php");

$GenreSciFi = new Genre("Sci-Fi", "A genre that combines scientific or futuristic elements with a tense story full of mystery, suspense, and plot twists");
$GenreScienceFiction = new Genre("Science Fiction", "A genre based on scientific, technological, futuristic, or space-related elements, often exploring imaginary worlds, advanced technology, or alternative realities.");
$Inception = new Movie("Inception", 2010, "Christopher Nolan", 148, [$GenreSciFi, $GenreScienceFiction]);
$Interstellar = new Movie("Interstellar", 2014, "Christopher Nolan", 169, [$GenreSciFi]);

$Inception->setRating(1);
$Interstellar->setRating(8);

$movies = [$Inception, $Interstellar];
