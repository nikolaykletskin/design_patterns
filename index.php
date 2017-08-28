<?php
use DesignPatterns\Creational\AbstractFactory\HtmlFactory;
use DesignPatterns\Creational\AbstractFactory\JsonFactory;
use DesignPatterns\Creational\Builder\TruckBuilder;
use DesignPatterns\Creational\Builder\CarBuilder;
use DesignPatterns\Creational\Builder\Director;
use DesignPatterns\Creational\FactoryMethod\ItalianFactory;
use DesignPatterns\Creational\Prototype\BarBookPrototype;
use DesignPatterns\Creational\Prototype\FooBookPrototype;
use DesignPatterns\Creational\Singleton\Singleton;

spl_autoload_register(function($className) {
    $path = str_replace('\\', '/', $className);
    $path = "{$_SERVER['DOCUMENT_ROOT']}/{$path}.php";
    require_once "{$path}";
});

// Abstract Factory
/*$factory = new HtmlFactory();
$text = $factory->createText('Hello, world!');
var_dump($text);

$factory = new JsonFactory();
$text = $factory->createText('Hello, world!');
var_dump($text);*/

// Builder
/*$truck_builder = new TruckBuilder();
$truck = (new Director())->build($truck_builder);
var_dump($truck);*/

/*$car_builder = new CarBuilder();
$car = (new Director())->build($car_builder);
var_dump($car);*/

// Factory Method
/*$factory = new ItalianFactory();
$car_ferrari = $factory->create('fast');
var_dump($car_ferrari);*/

// Prototype
/*$book_prototype = new BarBookPrototype();
for ($i = 0; $i < 3; $i++) {
    $book = clone $book_prototype;
    $book->setTitle("Book {$i}");
}

$book_prototype = new FooBookPrototype();
for ($i = 0; $i < 5; $i++) {
    $book = clone $book_prototype;
    $book->setTitle("Book {$i}");
}*/

// Singleton
/*Singleton::getInstance()->do();*/