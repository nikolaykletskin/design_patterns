<?php


namespace DesignPatterns\Creational\FactoryMethod;


class GermanFactory extends FactoryMethod {
    
    protected function createVehicle(string $type): VehicleInterface {
        switch ($type) {
            case parent::CHEAP:
                return new Bicycle();
            case parent::FAST:
                $car_mercedes = new CarMercedes();
                $car_mercedes->addAMGTuning();
                return $car_mercedes;
            default:
                throw new \InvalidArgumentException("$type is not a valid vehicle");
        }
    }
}