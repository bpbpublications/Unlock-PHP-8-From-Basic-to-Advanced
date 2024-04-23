<?php namespace TaskManager\System;

class Redirect {
    public static function to(string $url, array $params = []): void {
        if (!empty($params)) {
            $queryString = \http_build_query($params);
            $url .= '?' . $queryString;
        }
        \header('Location: ' . $url);
        exit;
    }
}