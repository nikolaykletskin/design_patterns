<?php
namespace DesignPatterns\Creational\FactoryMethod;

abstract class FactoryMethod {
    const
        CHEAP = 'cheap',
        FAST = 'fast';
    
    abstract protected function createVehicle(string $type): VehicleInterface;
    
    public function create(string $type): VehicleInterface
    {
        $obj = $this->createVehicle($type);
        $obj->setColor('black');
        
        return $obj;
    }
}