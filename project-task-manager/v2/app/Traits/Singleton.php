<?php namespace TaskManager\Traits;

trait Singleton {
    private static $instance = null;

    final protected function __construct()
    {
        $this->init();
    }

    final public static function instance() : mixed {
        if (self::$instance === null) {
            self::$instance = new static();
        }
        return self::$instance;
    }  

    protected function init(): void
    {
        //Initialize the singleton free from constructor parameters.
    }
}
