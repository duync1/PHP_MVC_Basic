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
        $result = $conn->query($sql);
        $products = [];

        if($result && $result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $products[] = $row;
            }
        }
        return $products;
    }

    public function addProduct($name, $price){
        $db = new Database();
        $conn = $db->connect();
        $stmt = $conn->prepare("INSERT INTO products (name, price) VALUES (?, ?)");
        $stmt->bind_param("sd", $name, $price);
        return $stmt->execute();
    }

}
