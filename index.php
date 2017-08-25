<?php
use DesignPatterns\Creational\AbstractFactory\HtmlFactory;
use DesignPatterns\Creational\AbstractFactory\JsonFactory;

spl_autoload_register(function($className) {
    $path = str_replace('\\', '/', $className);
    $path = "{$_SERVER['DOCUMENT_ROOT']}/{$path}.php";
    require_once "{$path}";
});

$factory = new HtmlFactory();
$text = $factory->createText('Hello, world!');
var_dump($text);

$factory = new JsonFactory();
$text = $factory->createText('Hello, world!');
var_dump($text);
