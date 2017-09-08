<?php
namespace DesignPatterns\Behavioral\Mediator\Subsystem;

use DesignPatterns\Behavioral\Mediator\Colleague;

class Client extends Colleague {
    public function request() {
        $this->mediator->makeRequest();
    }
    
    public function output(string $content) {
        echo $content;
    }
}