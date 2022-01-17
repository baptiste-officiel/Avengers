<?php

require_once './Avengers.php';

class IronMan extends Avengers{

    public function __construct(){
        parent::__construct("Iron Man", "Le mécanicien riche", 70);
    }
    
}