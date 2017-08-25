<?php


namespace DesignPatterns\Creational\AbstractFactory;


class JsonText extends Text {
    public function __construct($text) {
        parent::__construct($text);
        $this->text = "{\"text\":\"{$this->text}\"}";
    }
}