<?php

class Movie
{
    public $title;
    public $year;
    public $cast;
    public $description;
    public $plot;
    public $duration;

    public function getMovieInfo()
    {
        return
        "titolo : $this->title 
        anno : $this->year
        cast : $this->cast 
        trama : $this->plot 
        durata : $this->duration
        descrizione : $this->description";
    }
}

?>