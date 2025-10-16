<?php
require_once "./config/Database.php";

class ProductModel {
    // private $conn;
    // private $db;

    // public function __construct() {
    //     $this->db = new Database();
    //     $this->conn = $this->db->connect();
    // }

    public function getAllProducts(){
        $db = new Database();
        $conn = $db->connect();
        $sql = "SELECT * FROM products";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $conn = null;
        return $products;
        
    }

    public function addProduct($name, $price){
        $db = new Database();
        $conn = $db->connect();
        $stmt = $conn->prepare("INSERT INTO products (name, price) VALUES (:name, :price)");
        return $stmt->execute([
            ':name' => $name,
            ':price' => $price
        ]);
    }

}
