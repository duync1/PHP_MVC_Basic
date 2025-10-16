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

    public function viewAddProduct($error = [], $old = []){

        include "./app/Views/product_form.php";
    }

    public function handleAddProduct(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $name = $_POST['name'] ?? '';
            $price = $_POST['price'] ?? 0;
            $error = [];
            $old = ['name' => $name, 'price' => $price];

            if(empty($name)){
                $error['name'] = "Product name is required.";
            }

            if($price === ""){
                $error['price'] = "Product price is required.";
            } elseif(!is_numeric($price) || $price < 0){
                $error['price'] = "Product price must be a positive number.";
            }

            if(!empty($error)){
                $this->viewAddProduct(($error), $old);
                return;
            }

            $model = new ProductModel();
            if($model->addProduct($name, $price)){
                echo "<script>alert('Product added successfully!'); window.location.href = '/project/';</script>";
            } else {
                echo "<script>alert('Failed to add product.'); history.back();</script>";
            }
        }
    }
}