<?php

// Подключение к Mongo где лежат товары. Так же тут может быть MySql с данными пользователей.

use MongoDB\Client;

// Чтение конфигурационного файла
$config = json_decode(file_get_contents(__DIR__ . '/../config.json'), true);

// Данные для подключения к MongoDB
$host = $config['db']['localhost'];
$dbname = $config['db']['name'];
$user = $config['db']['user'];
$password = $config['db']['password'];

// Соединяемся с MongoDB
$mongo = new Client("mongodb://$user:$password@$host/$dbname");

// Выбираем базу данных
$database = $mongo->selectDatabase($dbname);

