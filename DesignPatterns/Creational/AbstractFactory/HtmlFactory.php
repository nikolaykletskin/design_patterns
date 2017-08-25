<?php
namespace DesignPatterns\Creational\AbstractFactory;


class HtmlFactory extends AbstractFactory {
    public function createText($content): Text {
        return new HtmlText($content);
    }
}