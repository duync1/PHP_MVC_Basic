<?php

$router->get("/", "ProductController@index");
$router->get("/product/test", "ProductController@test");
$router->get("/product/viewAddProduct", "ProductController@viewAddProduct");

$router->post("/product/handleAddProduct", "ProductController@handleAddProduct");

$router->getRoute();