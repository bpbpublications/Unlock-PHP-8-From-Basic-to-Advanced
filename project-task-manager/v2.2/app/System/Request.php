<?php namespace Taskmanager\System;

class Request {
    public function hasHeader(string $header): bool {
        return isset($_SERVER['HTTP_' . strtoupper(str_replace('-', '_', $header))]);
    }
}