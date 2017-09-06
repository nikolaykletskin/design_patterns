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
use DesignPatterns\Structural\Adapter\Kindle;
use DesignPatterns\Structural\Adapter\EBookAdapter;
use DesignPatterns\Structural\Adapter\Book;
use DesignPatterns\Structural\Bridge\HelloWorldService;
use DesignPatterns\Structural\Bridge\HtmlFormatter;
use DesignPatterns\Structural\Decorator\WebService;
use DesignPatterns\Structural\Decorator\XmlRenderer;
use DesignPatterns\Structural\Decorator\JsonRenderer;
use DesignPatterns\Structural\Composite\Form;
use DesignPatterns\Structural\Composite\TextElement;
use DesignPatterns\Structural\Composite\InputElement;

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

// Adapter
/*$book = new Book();
$book->open();
$book->turnPage();
$book->getPage();

$ebook = new Kindle();
$adapter = new EBookAdapter($ebook);
$adapter->open();
$adapter->turnPage();
var_dump($adapter->getPage());*/

// Bridge
/*$service = new HelloWorldService(new HtmlFormatter());
echo $service->get();*/

// Decorator
/*$decorator = new XmlRenderer(new WebService('hello'));
echo $decorator->renderData();

$decorator = new JsonRenderer(new WebService('hello'));
echo $decorator->renderData();*/

// Composite
/*$form = new Form();
$form->addElement(new TextElement('text'));
$form->addElement(new InputElement());
$form->addElement(new $form());
echo $form->render();*/