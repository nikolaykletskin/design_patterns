<?php


namespace DesignPatterns\Behavioral\ChainOfResponsibilities\Responsible;


use DesignPatterns\Behavioral\ChainOfResponsibilities\Handler;
use Psr\Http\Message\RequestInterface;

class HttpInMemoryCacheHandler extends Handler {
    private $data;
    
    public function __construct(array $data, Handler $handler = null) {
        parent::__construct($handler);
        $this->data = $data;
    }
    
    protected function processing(RequestInterface $request) {
        $key = sprintf('%s?%s', $request->getUri()->getPath(), $request->getUri()->getQuery());
        
        if ($request->getMethod() == 'GET' && isset($this->data[$key])) {
            return $this->data[$key];
        }
        
        return null;
    }
}