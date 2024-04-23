<?php namespace TaskManager\System;

use TaskManager\Traits\Singleton;

class App {
    use Singleton;

    protected $middlewares = [
        \TaskManager\Middleware\Authentication::class,
        // ... other middleware you can add in the future
    ];

    public function run(): mixed {
        $router = Router::instance();

        //if not route via api apply global middleware
        if(!$router->isApiRoute($router->getCurrentPath())){
            $this->runMiddlewares();
        }

        return $router->run();
    }

    protected function runMiddlewares() {
        foreach ($this->middlewares as $middlewareClass) {
            $middleware = new $middlewareClass();
            $middleware->handle();
        }
    }
}