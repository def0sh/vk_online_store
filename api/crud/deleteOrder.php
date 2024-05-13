<?php

// Функция для удаления заказа
function deleteOrder($orderId) {
    $orderService = new OrderService();

    $orderService->deleteOrder($orderId);

}
