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

$second_movie_description = "Tredici vite (Thirteen Lives) è un film del 2022 diretto da Ron Howard, basato sulla storia reale dell'incidente di Tham Luang.";

//aggiungo la trama
$first_movie_plot = "2012. Robert Neville sembra essere l'unico sopravvissuto ad una spaventosa epidemia iniziata 3 anni prima, generata dal virus del morbillo geneticamente modificato, originariamente concepito dalla dottoressa Alice Krippin per combattere il cancro. L'epidemia ha infettato quasi tutti gli esseri umani e gli animali domestici con risultati diversi: la stragrande maggioranza è morta, mentre una piccola percentuale ha subìto una degenerazione simile a quella provocata dalla rabbia, che li ha condotti allo stato di zombi che devono nascondersi dai raggi solari. Meno dell'1% della popolazione è risultato immune agli effetti dell'epidemia, ma è stato cacciato e ucciso dagli infetti.
Brillante virologo militare, il dottor Neville si è barricato nella sua casa di New York, costruendovi un laboratorio sotterraneo in cui conduce degli esperimenti su animali infetti per trovare una cura all'epidemia; solo di giorno può aggirarsi per le strade in cerca di cibo e rifornimenti, dato che gli infetti rimangono nascosti nel buio all'interno degli edifici abbandonati, poiché se si espongono alla luce solare il loro corpo brucia. La sua unica compagnia sono la cagna Sam e dei manichini coi quali parla; assalito dai ricordi della moglie e della figlia che sono morte 3 anni prima per un incidente in elicottero durante l'evacuazione, passa ore a guardare DVD e programmi televisivi registrati, e attende che qualcuno risponda al suo continuo messaggio radio che invita ogni sopravvissuto a raggiungerlo al porto: ogni giorno Robert si presenta al luogo stabilito nel messaggio aspettando inutilmente qualcuno.
Un giorno, mentre Robert e il suo cane cacciano un cervo per le strade, Sam si addentra in un magazzino oscuro e decadente, dove probabilmente si nascondono umani infetti, e il suo padrone entra per cercarla, riuscendo a trovarla. I due, però, vengono scoperti dagli infetti e scappano, buttandosi da una finestra dell'edificio. Robert, dato che una delle sue cure sperimentali era risultata efficace con una cavia, prepara una trappola davanti alla tana e riesce a catturare una femmina infetta, ma una volta nel laboratorio la cura porta la donna vicino alla morte.
Il giorno dopo, durante il suo consueto giro della città, Robert trova uno dei suoi manichini in mezzo alla strada; avvicinatosi per controllare, cade in una trappola, che gli fa sbattere la testa e gli fa perdere i sensi. La trappola è stata preparata da un infetto apparentemente più intelligente degli altri, che aveva visto Robert al magazzino; risvegliandosi mentre il sole sta tramontando, Robert si libera usando un coltello ma involontariamente si ferisce con la lama. Mentre cerca di strisciare alla macchina, l'uomo infetto si rivela e sguinzaglia tre cani infetti contro l'uomo e il suo cane, che feriscono gravemente e contagiano il cane da pastore tedesco. Dopo aver ucciso i cani infetti con una pistola, Robert porta Sam al laboratorio e le inietta un antidoto sperimentale per salvarla, ma quando i sintomi iniziano a manifestarsi diventa aggressiva e il suo padrone è suo malgrado costretto ad ucciderla. Il giorno dopo, rattristato dal dolore e ora veramente solo, Robert va a seppellire il corpo del suo cane. La notte stessa, ormai convinto di essere l'unico uomo rimasto sulla Terra, fuori di sé esce per uccidere il maggior numero di infetti, travolgendoli con la macchina.
Quando Robert sta per essere sopraffatto dagli infetti e tutto sembra perduto, l'arrivo di una donna e di un bambino, Anna ed Ethan, sopravvissuti e immuni anch'essi, lo salva dall'assalto. I tre si ritirano nella casa di Robert, dove Anna gli spiega che Dio ha fatto in modo che lo salvasse e le ha detto di mettersi in viaggio per una colonia di sopravvissuti nel Vermont, spiegando che il virus non avrebbe resistito al freddo. Anna racconta a Robert la propria avventura, spiegandogli che, durante lo scoppio dell'epidemia, lei e un gruppo di altri uomini si trovavano a bordo di una nave ospedaliera della Croce Rossa al largo di San Paolo del Brasile, ma a causa degli approvvigionamenti a terra qualcuno contrasse il virus e lo diffuse all'interno della nave; lei e il bambino sono gli unici sopravvissuti.
Fra lei e Robert, che ha visto morire tutti coloro a cui teneva e non ha più fede, scoppia un litigio, interrotto dall'assalto degli infetti guidati dal maschio infetto che aveva preparato la trappola. Il trio si rifugia nel laboratorio, dove Robert scopre che quella donna infetta a cui aveva somministrato il vaccino sta inaspettatamente guarendo. L’uomo preleva dalla donna un campione di sangue e lo consegna ad Anna, affinché si possa ricavare un antidoto per curare la malattia e salvare l'umanità. Per permettere a lei e a suo figlio di fuggire attraverso un cunicolo sotterraneo, Robert si sacrifica facendosi esplodere insieme agli infetti.
Anna raggiunge la colonia di sopravvissuti nel Vermont: la cura ha dunque salvato il mondo e permesso all'umanità di ricominciare; la storia di Robert Neville, raccontata da Anna e documentata sulle registrazioni video dei suoi esperimenti, creerà la sua leggenda.";


$second_movie_plot = "Dodici adolescenti e un adulto rimangono intrappolati all'interno di Tham Luang Nang Non, una grotta nella provincia di Chiang Rai. Le piogge monsoniche fanno salire il livello delle acque e le autorità tailandesi devono salvare le tredici persone intrappolate prima che anneghino";


$first_movie = new Movie( 1, 'Io sono leggenda', 'sci-fi/horror', 2007, 'Will Smith', '101 minuti', $first_movie_description, $first_movie_plot);

$second_movie = new Movie( 2, 'Tredici vite','drammatico', 2022, 'Colin Farrell', '147 minuti',$second_movie_description, $second_movie_plot);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie_oop</title>
</head>

<body>

</body>

</html>