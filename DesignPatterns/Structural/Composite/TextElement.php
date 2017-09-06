<?php


namespace DesignPatterns\Structural\Composite;


class TextElement implements RenderableInterface {
    private $text;
    
    public function __construct($text) {
        $this->text = $text;
    }
    
    public function render(): string {
        
        return $this->text;
    }
}