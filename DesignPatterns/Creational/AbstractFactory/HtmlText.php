<?php
namespace DesignPatterns\Creational\AbstractFactory;


class HtmlText extends Text {
    public function __construct($text) {
        parent::__construct($text);
        $this->text = "<p>{$this->text}</p>";
    }
}