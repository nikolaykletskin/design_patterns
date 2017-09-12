<?php
namespace DesignPatterns\Behavioral\TemplateMethod;

class CityJourney extends Journey {
    protected function enjoyVacation(): string {
        return 'Eat, drink, take photos and sleep';
    }
    
    protected function buyGift() {
        return 'Buy a gift';
    }
}