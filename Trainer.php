<?php

require_once './Avengers.php';

class Trainer{
    private string $name;
    private array $listAvengers;

    function __construct(string $name, array $listAvengers){
        $this->name = $name;
        $this->listAvengers = $listAvengers;
    }

    public function infos(){
        if (count($this->listAvengers) > 0) {
            echo $this->name . " dirige " . count($this->listAvengers) . " Avengers.";
        } else {
            echo $this->name . " n'a aucun Avengers.";
        }
    }
}