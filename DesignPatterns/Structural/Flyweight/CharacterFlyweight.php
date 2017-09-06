<?php


namespace DesignPatterns\Structural\Flyweight;


class CharacterFlyweight implements FlyweightInterface {
    private $name;
    
    function __construct(string $name) {
        $this->name = $name;
    }
    
    public function render(string $font): string {
        return sprintf('Character %s with font %s', $this->name, $font);
    }
}