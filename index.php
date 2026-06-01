<?php
class Movie
{
    public $title;
    public $year;
    public $director;
    public $duration;

    public function __construct($_title, $_year, $_director, $_duration)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->director = $_director;
        $this->duration = $_duration;
    }

    public function getMovie()
    {
        return $this->title . " was recorded in " . $this->year . " by " . $this->director . " and has a duration of " . $this->duration . " minutes.";
    }
}

$Inception = new Movie("Inception", 2010, "Christopher Nolan", 148);
$Interstellar = new Movie("Interstellar", 2014, "Christopher Nolan", 169);

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