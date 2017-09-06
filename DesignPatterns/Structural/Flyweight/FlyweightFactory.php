<?php


namespace DesignPatterns\Structural\Flyweight;


class FlyweightFactory implements \Countable {
    /**
     * CharacterFlyweight
     */
    private $pool = [];
    public function get(string $name): CharacterFlyweight {
        if (!isset($this->pool[$name])) {
            $this->pool[$name] = new CharacterFlyweight($name);
        }
        return $this->pool[$name];
    }
    public function count() {
        return count($this->pool);
    }
}