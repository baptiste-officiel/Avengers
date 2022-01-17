<?php

require_once './Avengers.php';

class Thor extends Avengers{

    public function __construct(){
        parent::__construct("Thor", "Dieu du Tonnerre", 80);
    }
    
}