<?php


namespace DesignPatterns\Creational\Singleton;


final class Singleton {
    
    private static $instance;
    
    private function __construct()
    {
    }
    
    public static function getInstance(): Singleton {
        if (static::$instance === null) {
            return new static();
        }
        return self::$instance;
    }
    
    private function __clone()
    {
    }
    
    private function __wakeup()
    {
    }
    
    public function do() {
        return 'do';
    }
}