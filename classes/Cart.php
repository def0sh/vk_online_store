<?php

require_once 'DB.php';


class Cart {

    private $customer;
    private $db;

    public function __construct() {
        $this->customer = new Customer();
        $this->db = new DB();
    }

    // Метод для добавления товара в БД корзины
    public function addItem(Product $product, $quantity, $cartId) {

    }

    // Метод для удаления товара из БД корзины
    public function removeItem($cartId, Product $product) {

    }

    // Метод для получения общей стоимости товаров корзине
    public function getTotalPrice($cartId) {

    }
}
