<?php
class Router {
    private $routes = [];

    public function addRoute($url, $controller) {
        $this->routes[$url] = $controller;
    }

    public function route($url) {
        if (array_key_exists($url, $this->routes)) {
            $controllerName = $this->routes[$url];
            $controller = new $controllerName();
            $controller->index(); // Assuming index() is the default method to call
        } else {
            // Handle 404 error
            echo "404 Page Not Found";
        }
    }
}
