<?php

require_once __DIR__. '/classes/DB.php';

$test = new DB();
$items = $test->getAll('SELECT * FROM news');
var_dump($items);
