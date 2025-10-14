<?php
require_once "./app/Models/ProductModel.php";
class ProductController {
    
    public function index(){
        $model = new ProductModel();
        $products = $model->getAllProducts();

        include "./app/Views/product_list.php";
    }
}