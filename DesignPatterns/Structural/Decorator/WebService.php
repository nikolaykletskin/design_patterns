<?php


namespace DesignPatterns\Structural\Decorator;


class WebService implements RenderableInterface {
    private $data;
    
    public function __construct(string $data) {
        $this->data = $data;
    }
    
    public function renderData(): string {
        return $this->data;
    }
}