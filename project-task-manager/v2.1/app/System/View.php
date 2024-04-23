<?php namespace TaskManager\System;

use Exception;

class View {
   public static function render(string $viewFile, array $variables = []) : string|false {
        \ob_start();
        \extract($variables);

        try {
            $filePath = \getcwd() . '/' . $viewFile;

            if(!file_exists($filePath)){
                throw new Exception("FilePath: {$filePath} not exits");
            }

            include $filePath;
        }catch (\Throwable $e) {
           throw $e;
        }

        return \ob_get_clean();
    }

    public static function renderWithLayout(string $viewFile, array $variables = [], string $layout = 'layouts/index.php') : string|false {
        $content = self::render($viewFile, $variables);
        return self::render($layout, ['contentLayout' => $content] + $variables); // merges content and other variables
    }
}
