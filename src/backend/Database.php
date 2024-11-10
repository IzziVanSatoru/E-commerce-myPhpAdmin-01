<?php
namespace Backend;

class Database {
    private $pdo;

    public function __construct() {
        $this->pdo = new \PDO('mysql:host=db;dbname=ecommerce', 'root', 'password');
    }

    public function query($sql) {
        return $this->pdo->query($sql);
    }
}
