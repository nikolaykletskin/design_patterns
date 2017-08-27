<?php


namespace DesignPatterns\Creational\Builder\Parts;


class Vehicle {
    private $data = [];
    
    public function setPart($key, $value) {
        $this->data[$key] = $value;
    }
}