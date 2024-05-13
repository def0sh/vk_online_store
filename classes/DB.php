<?php

//use MongoDB\Client;

class DB {

    private $pdo;

    public function __construct($host, $port, $database) {
        // Подключение
       // $this->pdo = new PDO($dsn, $username, $password, $options);
    }

    public function query($collectionName, $filter = [], $options = []) {
        // Запрос
    }


}


