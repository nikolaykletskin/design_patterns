<?php


namespace DesignPatterns\Structural\Proxy;


class RecordProxy extends Record {
    private $isDirty = false;
    
    private $isInitialized = false;
    
    public function __construct(array $data = []) {
        parent::__construct($data);
        
        if (count($data) > 0) {
            $this->isInitialized = true;
            $this->isDirty = true;
        }
    }
    
    public function isDirty(): bool {
        return $this->isDirty;
    }
    
    public function __set(string $name, string $value) {
        $this->isDirty = true;
        parent::__set($name, $value);
    }
}