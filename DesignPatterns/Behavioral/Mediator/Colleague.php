<?php


namespace DesignPatterns\Behavioral\Mediator;


class Colleague {
    /**
     * @var Mediator
     */
    protected $mediator;
    
    public function setMediator(MediatorInterface $mediator) {
        $this->mediator = $mediator;
    }
}