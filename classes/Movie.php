<?php
class Movie
{
    public $title;
    public $year;
    public $genere;
    public $length;
    public $director;
    public $mainActor;

    public function __construct($title, $year, $genere, $length, $director, $mainActor) {
        $this->title = $title;
        $this->year = $year;
        $this->genere = $genere;
        $this->length = $length;
        $this->director = $director;
        $this->mainActor = $mainActor;
    }

    public function getData() {
        return 
        "Title: {$this->title},
         Year: {$this->year}, 
         Genre: {$this->genere}, 
         Length: {$this->length} minutes, 
         Director: {$this->director}, 
         Main Actor: {$this->mainActor}";
    }
}
