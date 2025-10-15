<?php

require_once "./routes/router.php";
$router = new Router();

require_once "./routes/routes.php";

$projectName = '/project';

$request_url = str_replace($projectName, '', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$methodRes = $_SERVER['REQUEST_METHOD'];

// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";

$router->resolve($methodRes, $request_url);



