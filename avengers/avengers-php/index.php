<?php

require_once './Avengers.php';
require_once './Trainer.php';

$trainer = new Trainer("Nick Fury", ["Thor", "Iron Man"]);

var_dump($trainer);