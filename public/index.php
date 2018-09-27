<?php

$GLOBALS['env'] = require_once '../env.php';

$spator = DIRECTORY_SEPARATOR;

require_once __DIR__ . $spator . "..". $spator ."vendor". $spator."random_compat". $spator ."lib". $spator ."random.php";

require_once '../FrontController.php';

(new FrontController())->run();
