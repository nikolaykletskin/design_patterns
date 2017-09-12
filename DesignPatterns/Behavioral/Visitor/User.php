<?php


namespace DesignPatterns\Behavioral\Visitor;


class User implements Role {
    private $name;
    
    function __construct(string $name) {
        $this->name = $name;
    }
    
    public function getName(): string {
        return sprintf('User %s', $this->name);
    }
    
    public function accept(RoleVisitorInterface $visitor) {
        $visitor->visitUser($this);
    }
}