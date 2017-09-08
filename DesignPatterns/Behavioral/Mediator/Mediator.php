<?php


namespace DesignPatterns\Behavioral\Mediator;

use DesignPatterns\Behavioral\Mediator\Subsystem\Database;
use DesignPatterns\Behavioral\Mediator\Subsystem\Client;
use DesignPatterns\Behavioral\Mediator\Subsystem\Server;

class Mediator implements MediatorInterface {
    private $server;
    
    private $database;
    
    private $client;
    
    public function __construct(Database $database, Client $client, Server $server) {
        $this->database = $database;
        $this->client = $client;
        $this->server = $server;
        
        $this->database->setMediator($this);
        $this->client->setMediator($this);
        $this->server->setMediator($this);
    }
    
    public function makeRequest() {
        $this->server->process();
    }
    
    public function queryDb() {
        return $this->database->getData();
    }
    
    public function sendResponse($content) {
        $this->client->output($content);
    }
}