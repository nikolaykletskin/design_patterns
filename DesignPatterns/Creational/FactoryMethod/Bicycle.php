<?php


namespace DesignPatterns\Creational\FactoryMethod;


class Bicycle implements VehicleInterface {
    private $color;
    
    public function setColor(string $rgb)
    {
        $this->color = $rgb;
    }
}