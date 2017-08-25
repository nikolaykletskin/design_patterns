<?php
namespace DesignPatterns\Creational\AbstractFactory;


abstract class Text {
    protected $text;
    
    public function __construct(string $text)
    {
        $this->text = $text;
    }
}