<?php

class Movie
{
    //dichiarazione delle variabili ogni istanza
    //"la tabella Movie ha queste colonne:"
    public $id;
    public $title;
    public $year;
    public $main_actor;
    public $description;
    public $plot;
    public $genre;
    public $duration;

    public function __construct($id, $title, $genre, $year, $main_actor, $duration, $plot, $description)
    {
        //assegnazione del valore delle variabili
        $this->id = $id;
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
        $this->main_actor = $main_actor;
        $this->duration = $duration;
        $this->description = $description;
        $this->plot = $plot;
    }

    public function getMovieInfo()
    {
        //funzione che restituisce i dati principali di una istanza
        return
        "titolo : $this->title 
        anno : $this->year
        protagonisti : $this->main_actor
        trama : $this->plot 
        durata : $this->duration
        descrizione : $this->description";
    }
}
//aggiungo le descrizioni dei film
$first_movie_description = "Io sono leggenda (I Am Legend) è un film del 2007 diretto da Francis Lawrence, basato sull'omonimo romanzo di Richard Matheson.
È il terzo film basato su questo libro, dopo L'ultimo uomo della Terra (1964) dei registi Sidney Salkow e Ubaldo Ragona e 1975: Occhi bianchi sul pianeta Terra (The Omega Man) di Boris Sagal.
Il film è uscito il 14 dicembre 2007 nelle sale americane e l'11 gennaio 2008 in quelle italianeIo sono leggenda (I Am Legend) è un film del 2007 diretto da Francis Lawrence, basato sull'omonimo romanzo di Richard Matheson.
È il terzo film basato su questo libro, dopo L'ultimo uomo della Terra (1964) dei registi Sidney Salkow e Ubaldo Ragona e 1975: Occhi bianchi sul pianeta Terra (The Omega Man) di Boris Sagal.
Il film è uscito il 14 dicembre 2007 nelle sale americane e l'11 gennaio 2008 in quelle italiane";

$second_movie_description = "";
//aggiungo la trama
$first_movie_plot = "";
$second_movie_plot = "";


$first_movie = new Movie( 1, 'Io sono leggenda', 'sci-fi/horror', 2007, 'Will Smith', '101 minuti', $first_movie_description, $first_movie_plot);

$second_movie = new Movie( 2, 'Tredici vite','drammatico', 2022, 'Colin Farrell', '147 minuti',$second_movie_description, $second_movie_plot);

?>