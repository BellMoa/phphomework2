<?php


require_once __DIR__. '/model/News.php';

$items = News::getAll();

include __DIR__ . '/view/index.php';