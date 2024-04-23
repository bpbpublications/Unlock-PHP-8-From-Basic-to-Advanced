<?php namespace TaskManager\System;

use TaskManager\Traits\Singleton;

class Router {
    use Singleton;

    private array $routes = [];
    
    private function init() : void{
        $this->routes = require \getcwd(). '/app/routes.php';
    }

    public function run(): string|false {
        $path = $this->getCurrentPath();
        $controllerMapping = $this->routes[$path] ?? null;

        if ($controllerMapping) {
            [$controllerClass, $method] = $controllerMapping;
            $controller = new $controllerClass();
            return $controller->$method();
        }

        return View::render('layouts/404.php');
    }

    public function getCurrentPath() {
        return \parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}