<?php

$router->get("/", "ProductController@index");
$router->get("/product/test", "ProductController@test");

$router->getRoute();