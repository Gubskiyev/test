<?php
require_once __DIR__ . "/models/news.php";


$items = News::getAll();

var_dump($items);