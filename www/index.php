<?php

use app\Controllers\PaysController;

include('../include.php');

$controller= new PaysController;
$view=$controller->index();
$view->$this->display();
