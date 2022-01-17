<?php

require_once './Thor.php';
require_once './IronMan.php';
require_once './Trainer.php';

$trainer = new Trainer("Nick Fury", []);

$trainer->infos();

// var_dump($trainer);