<?php

class Customer {
    private $db;

    public function __construct() {
        $this->db = new DB();

    }

    public function getUserInfo($userId) {
        // Получение информации о пользователе
    }
}