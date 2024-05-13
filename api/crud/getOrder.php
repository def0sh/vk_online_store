<?php

// Функция для получения информации о заказе

function getOrderInfo($orderId) {
    // Создаем объект сервиса заказов и вызываем метод для получения информации о заказе
    $orderService = new OrderService();
    $orderService->getOrderInfo($orderId);
}