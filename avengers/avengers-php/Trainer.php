<?php

class Trainer{
    private string $name;
    private array $listAvengers;

    function __construct(string $name, array $listAvengers){
        $this->name = $name;
        $this->listAvengers = $listAvengers;
    }

    public function infos(){
        if (count($this->listAvengers) > 0) {
            return $this->name . " dirige " . count($this->listAvengers) . " Avengers.";
        } else {
            return $this->name . " n'a aucun Avengers.";
        }
    }
    
}