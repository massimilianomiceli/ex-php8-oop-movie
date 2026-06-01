<?php

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
