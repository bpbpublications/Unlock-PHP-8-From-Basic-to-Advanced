<?php namespace TaskManager\System;

use TaskManager\Controllers\RegisterUsers;
use TaskManager\Traits\Singleton;

class Router {
    use Singleton;

    private array $routes = [];
    
    private function init(): void {
        $traditionalRoutes = require \getcwd() . '/app/routes.php';
        $attributeRoutes = $this->getRoutesFromAttributes();
        $t = 1;
        $this->routes = array_merge_recursive($traditionalRoutes, $attributeRoutes);
    }

    public function run(): string|false {
        $path = $this->getCurrentPath();
        $httpMethod = $_SERVER['REQUEST_METHOD'];
        $controllerMapping = $this->routes[$httpMethod][$path] ?? null;

        if ($controllerMapping) {
            [$controllerClass, $method, $middlewares] = $controllerMapping + [null, null, []];

            // Apply route-specific middleware (if they are API routes)
            foreach ($middlewares as $middlewareClass) {
                $middleware = new $middlewareClass();
                $middleware->handle();
            }

            $controller = new $controllerClass();
            return $controller->$method();
        }

        return View::render('layouts/404.php');
    }

    public function getCurrentPath() {
        return \parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

    public function getRoutesFromAttributes(): array {
        $controllers = [
            RegisterUsers::class,
        ];

        $routes = [];
        foreach ($controllers as $controller) {
            $reflection = new \ReflectionClass($controller);
            foreach ($reflection->getMethods() as $method) {
                $routeAttribute = $method->getAttributes(Route::class)[0] ?? null;
                if ($routeAttribute) {
                    $httpMethod = $routeAttribute->newInstance()->method;
                    $path = $routeAttribute->newInstance()->path;
                    $middlewares = $routeAttribute->newInstance()->middlewares;
                    $routes[$httpMethod][$path] = [$controller, $method->getName(), $middlewares];
                }
            }
        }

        return $routes;
    }

    public function isApiRoute(string $path): bool {
        return strpos($path, '/api/') === 0;
    }
}