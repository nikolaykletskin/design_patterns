<?php


namespace DesignPatterns\Structural\Bridge;


abstract class Service {
    /**
     * @var FormatterInterface
     */
    protected $implementation;
    
    public function __construct(FormatterInterface $printer) {
        $this->implementation = $printer;
    }
    
    public function setImplementation(FormatterInterface $printer) {
        $this->implementation = $printer;
    }
    
    abstract public function get();
}