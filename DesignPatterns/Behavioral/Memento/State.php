<?php


namespace DesignPatterns\Behavioral\Memento;


class State {
    const STATE_CREATED = 'created';
    const STATE_OPENED = 'opened';
    const STATE_ASSIGNED = 'assigned';
    const STATE_CLOSED = 'closed';
    
    private $state;
    
    private static $validStates = [
        self::STATE_CREATED,
        self::STATE_OPENED,
        self::STATE_ASSIGNED,
        self::STATE_CLOSED
    ];
    
    function __construct(string $state) {
        self::ensureIsValidState($state);
        $this->state = $state;
    }
    
    private static function ensureIsValidState(string $state) {
        if (!in_array($state, self::$validStates)) {
            throw new \InvalidArgumentException('Invalid state given');
        }
    }
    
    function __toString() {
        return $this->state;
    }
}