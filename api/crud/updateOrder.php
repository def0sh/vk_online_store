<?php


// Функция для обновления статуса заказа
function updateOrderStatus($orderId, $newStatus) {
    // Создаем объект сервиса заказов и вызываем метод для обновления статуса заказа
    $orderService = new OrderService();

    $orderService->updateOrderStatus($orderId, $newStatus);
}
