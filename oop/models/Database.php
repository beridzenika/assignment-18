<?php

class Data{
    public $serverName = 'localhost';
    public $username = 'root';
    public $password = '';
    public $dbname = 'blog';

    public $connection;

    function __construct() {
        $this->connection = new PDO("mysql:host=".$this->serverName.";dbname=".$this->dbname,
                    $this->username, $this->password);
    }
}