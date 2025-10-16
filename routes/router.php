<?php

class Router {
    protected $routes = [];

    public function get($url, $action) {
        $this->routes['GET'][$url] = $action;
    }
    
    public function post($url, $action) {
        $this->routes['POST'][$url] = $action;
    }

    public function getRoute(){
        return $this->routes;
    }

    public function resolve($method, $url){
        $url = $url ?: '/';
        if(isset($this->routes[$method][$url])){
            $action = $this->routes[$method][$url];
            [$controller, $function] = explode("@", $action);

            require_once './app/Controllers/'.$controller.'.php';

            $controllerInstance = new $controller();
            $controllerInstance->$function();
        }
        else{
            echo "404 ERROR";
        }
    }
}