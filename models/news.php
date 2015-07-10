<?php
require_once __DIR__ . "/../classes/database_class.php";

class News {
    public $id;
    public $title;
    public $text;

    public static function getAll() {
        $db = new Db();
        return $db->query("SELECT * FROM news", "News");
    }


}