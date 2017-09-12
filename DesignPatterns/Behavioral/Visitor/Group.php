<?php


namespace DesignPatterns\Behavioral\Visitor;


class Group implements Role {
    private $name;
    
    function __construct(string $name) {
        $this->name = $name;
    }
    
    public function getName(): string {
        return sprintf('Group %s', $this->name);
    }
    
    public function accept(RoleVisitorInterface $visitor) {
        $visitor->visitGroup($this);
    }
}