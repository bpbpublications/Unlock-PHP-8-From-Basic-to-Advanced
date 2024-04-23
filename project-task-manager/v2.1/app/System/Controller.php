<?php namespace TaskManager\System;

use Throwable;

abstract class Controller {
    /**
     * Name of the folder that exists
     * in the folder views
     *
     * @var string
     */
    protected string $controllerName;

    private string $controllerViewPath = 'app/Views/';

    public function __construct() {
        if (!isset($this->controllerName)) {
            $this->controllerName = \strtolower((new \ReflectionClass($this))->getShortName());
        }
    }

    public function index(array $data = [], ?string $layout = 'layouts/index.php'): string|false {
        $viewPath = $this->controllerViewPath . $this->controllerName . '/index.php';
        return $this->renderWithLayout($viewPath, $data, $layout);
    }

    protected function render(string $viewPath, array $data = []): string|false {
        try {
            return View::render($viewPath, $data);
        } catch (\Throwable $th) {
            return $this->renderError($th);
        }
    }

    protected function renderWithLayout(string $viewPath, array $data = [], string $layout = 'layouts/index.php'): string|false {
        try {
            return View::renderWithLayout($viewPath, $data, $layout);
        } catch (\Throwable $th) {
            return $this->renderError($th, $layout);
        }
    }

    protected function renderError(Throwable $exception, string $layout = null): string|false{
        $viewErrorPath = $this->controllerViewPath . 'error/index.php';
        $viewError = [
            'error' => $exception->getMessage(),
            'error_full' => $exception->getTraceAsString(),
        ];

        if ($layout) {
            return View::renderWithLayout($viewErrorPath, $viewError, $layout);
        }

        return View::render($viewErrorPath, $viewError);
    }

}