<?php


namespace DesignPatterns\Structural\Composite;


class Form implements RenderableInterface {
    /**
     * @var RenderableInterface[]
     */
    private $elements = [];
    
    public function render(): string {
    
        $output = '<form>';
        foreach ($this->elements as $element) {
            $output .= $element->render();
        }
        $output .= '</form>';
        
        return $output;
    }
    
    public function addElement(RenderableInterface $element) {
        $this->elements[] = $element;
    }
}