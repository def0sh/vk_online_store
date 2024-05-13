<?php


require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/api/order/crud.php';

use Slim\Factory\AppFactory;

// Создаем экземпляр приложения Slim
$app = AppFactory::create();


// Запускаем приложение
$app->run();
