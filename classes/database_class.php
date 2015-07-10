<?php
require_once "config_class.php";

class Db {
    public $mysqli;
    public $config;

    public function __construct() {
        $this->config = new Config();
        $this->mysqli = new mysqli($this->config->dbhost,$this->config->dbuser,$this->config->dbpass,$this->config->dbname);
        $this->mysqli->query("SET NAMES 'utf8'");
    }

    public function query($query) {
        $res = $this->mysqli->query($query);
        if (false === $res) return false;
        $ret = [];
        while ($row = mysqli_fetch_object($res)) {
            $ret[] = $row;
        }
        return $ret;
    }

}