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
