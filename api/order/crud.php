<?php

require '../../index.php';
require 'vk_online_store/classes/Order.php';


//$app = AppFactory::create();

// Создаем объект сервиса заказов
 $orderService = new OrderService();

// Endpoint для создания нового заказа
$app->post('/orders', function (Request $request, Response $response, OrderService $orderService) {
    // $newOrder = $orderService->createOrder(arg1, arg2..);
    // Дополнительная логика
});

// Endpoint для получения информации о заказе
$app->get('/orders/{orderId}', function (Request $request, Response $response, $args, OrderService $orderService) {

});

// Endpoint для обновления статуса заказа
$app->put('/orders/{orderId}', function (Request $request, Response $response, $args, OrderService $orderService){

});

// Endpoint для удаления заказа
$app->delete('/orders/{orderId}', function (Request $request, Response $response, $args, OrderService $orderService) {

});


$app->run();
