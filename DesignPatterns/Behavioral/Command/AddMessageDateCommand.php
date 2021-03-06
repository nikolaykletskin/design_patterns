<?php


namespace DesignPatterns\Behavioral\Command;


class AddMessageDateCommand implements UndoableCommandInterface {
    private $output;
    
    function __construct(Receiver $console) {
        $this->output = $console;
    }
    
    public function execute() {
        $this->output->enableDate();
    }
    
    public function undo() {
        $this->output->disableDate();
    }
}