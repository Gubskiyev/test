<?php
require_once __DIR__ . "/models/news.php";


$items = News::getAll();
require_once __DIR__ . "/views/index.php";