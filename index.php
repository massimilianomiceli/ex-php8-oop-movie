<?php

trait Rating
{
    public $rating;

    public function setRating($newRating)
    {
        if ($newRating > 0 && $newRating <= 10) {
            $this -> rating = $newRating;
        } else {
            echo "Please enter a rating from 1 to 10";
        }
    }

    public function getRating()
    {
        return $this->rating;
    }
}

class Genre
{
    public $name;
    public $description;

    public function __construct($_name, $_description)
    {
        $this->name = $_name;
        $this->description = $_description;
    }
}


class Movie
{
    use Rating;
    public $title;
    public $year;
    public $director;
    public $duration;
    public $genres;

    public function __construct($_title, $_year, $_director, $_duration, $_genres)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->director = $_director;
        $this->duration = $_duration;
        $this->genres = $_genres;
    }

    public function getMovie()
    {
        $genresList = [];

        foreach ($this->genres as $genre) {
            $genresList[] = $genre->name;
        }

        //implode restituisce una stringa contenente tutti gli elementi di un array nel medesimo ordine, inserendo il parametro glue tra un elemento e l'altro.
        return $this->title . " was released in " . $this->year . ", directed by " . $this->director . ", and has a duration of " . $this->duration . " minutes. " . "<br>" . "Genres: " . implode(", ", $genresList) . "<br>" . "Rating: " . $this->rating;
    }
}
$GenreSciFi = new Genre("Sci-Fi", "A genre that combines scientific or futuristic elements with a tense story full of mystery, suspense, and plot twists");
$GenreScienceFiction = new Genre("Science Fiction", "A genre based on scientific, technological, futuristic, or space-related elements, often exploring imaginary worlds, advanced technology, or alternative realities.");
$Inception = new Movie("Inception", 2010, "Christopher Nolan", 148, [$GenreSciFi, $GenreScienceFiction]);
$Interstellar = new Movie("Interstellar", 2014, "Christopher Nolan", 169, [$GenreSciFi]);

var_dump($Inception);
var_dump($Interstellar);

$Inception->setRating(1);
$Interstellar->setRating(8);


echo $Inception -> getMovie();
echo "<br>";
echo $Interstellar -> getMovie();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>