<?php
namespace DesignPatterns\Behavioral\Observer;

use SplObserver;

class User implements \SplSubject {
    private $email;
    
    private $observers;
    
    function __construct() {
        $this->observers = new \SplObjectStorage();
    }
    
    public function attach(SplObserver $observer) {
        $this->observers->attach($observer);
    }
    
    public function detach(SplObserver $observer) {
        $this->observers->detach($observer);
    }
    
    public function changeEmail($email) {
        $this->email = $email;
        $this->notify();
    }
    
    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}