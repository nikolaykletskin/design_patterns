<?php
namespace DesignPatterns\Behavioral\Command;

interface UndoableCommandInterface extends CommandInterface {
    public function undo();
}