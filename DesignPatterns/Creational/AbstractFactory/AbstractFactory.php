<?php
namespace DesignPatterns\Creational\AbstractFactory;


abstract class AbstractFactory {
    abstract function createText($content) :Text;
}