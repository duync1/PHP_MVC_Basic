<?php
require_once "./app/Models/ProductModel.php";
class ProductController {
    
    public function index(){
        $model = new ProductModel();
        $products = $model->getAllProducts();

        include "./app/Views/product_list.php";
    }
    
    public function test(){
        echo "This is a test function in ProductController.";
    }
}