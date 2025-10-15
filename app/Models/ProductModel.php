<?php
require_once "./config/Database.php";

class ProductModel {
    private $conn;
    private $db;

    public function __construct() {
        $this->db = new Database();
        $this->conn = $this->db->connect();
    }

    public function getAllProducts(){
        $sql = "SELECT * FROM products";
        $result = $this->conn->query($sql);
        $products = [];

        if($result && $result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $products[] = $row;
            }
        }
        return $products;
    }
}
