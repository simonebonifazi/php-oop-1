<?php

class Movie
{
    //dichiarazione delle variabili ogni istanza
    //"la tabella Movie ha queste colonne:"
    public $title;
    public $year;
    public $main_actor;
    public $cast;
    public $description;
    public $plot;
    public $genre;
    public $duration;

    public function __construct($title, $genre, $year, $main_actor, $duration)
    {
        //il valore delle variabili
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
        $this->main_actor = $main_actor;
        $this->duration = $duration;
    }

    public function getMovieInfo()
    {
        //funzione che restituisce tutti i dati di una istanza
        return
        "titolo : $this->title 
        anno : $this->year
        protagonisti : $this->main_actor
        cast : $this->cast
        trama : $this->plot 
        durata : $this->duration
        descrizione : $this->description";
    }
}

$first_movie = new Movie('Io sono leggenda', 'sci-fi/horror', 2007, 'Will Smith', '101 minuti');

$second_movie = new Movie('Tredici vite','drammatico', 2022, 'Colin Farrell', '147 minuti');

?>