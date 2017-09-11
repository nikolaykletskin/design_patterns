<?php


namespace DesignPatterns\Behavioral\Memento;


class Memento {
    private $state;
    
    function __construct(State $stateToSave) {
        $this->state = $stateToSave;
    }
    
    /**
     * @return State
     */
    public function getState(): State {
        
        return $this->state;
    }
}