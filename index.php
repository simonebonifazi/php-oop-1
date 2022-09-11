<?php

class Movie
{
    public $title;
    public $year;
    public $main_actors;
    public $cast;
    public $description;
    public $plot;
    public $duration;

    public function __construct($title, $year, $main_actors, $duration)
    {
        $this->title = $title;
        $this->year = $year;
        $this->main_actors = $main_actors;
        $this->duration = $duration;
    }

    public function getMovieInfo()
    {
        return
        "titolo : $this->title 
        anno : $this->year
        protagonisti : $this->main_actors
        cast : $this->cast
        trama : $this->plot 
        durata : $this->duration
        descrizione : $this->description";
    }
}

?>