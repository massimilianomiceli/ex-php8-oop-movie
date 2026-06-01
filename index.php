<?php

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
    public $title;
    public $year;
    public $director;
    public $duration;

    public function __construct($_title, $_year, $_director, $_duration, Genre $_genre)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->director = $_director;
        $this->duration = $_duration;
        $this->genre = $_genre;
    }

    public function getMovie()
    {
        return $this->title . " was recorded in " . $this->year . " by " . $this->director . " and has a duration of " . $this->duration . " minutes.";
    }
}
$InceptionGenre = new Genre("Sci-Fi", "A genre that combines scientific or futuristic elements with a tense story full of mystery, suspense, and plot twists");
$Inception = new Movie("Inception", 2010, "Christopher Nolan", 148, $InceptionGenre);
$InterstellarGenre = new Genre("Science Fiction", "A genre based on scientific, technological, futuristic, or space-related elements, often exploring imaginary worlds, advanced technology, or alternative realities.");
$Interstellar = new Movie("Interstellar", 2014, "Christopher Nolan", 169, $InterstellarGenre);

var_dump($Inception);
var_dump($Interstellar);

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