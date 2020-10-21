<?php
class Foo
{
    public function printItem($string)
    {
        echo 'Foo: ' . $string . PHP_EOL;
    }
    
    public function printPHP()
    {
        echo 'PHP просто супер.' . PHP_EOL;
    }
}

class Bar extends Foo
{
    public function printItem($string)
    {
        echo 'Bar: ' . $string . PHP_EOL;
    }
}

$foo = new Foo();
$bar = new Bar();
$foo->printItem('baz'); // Выведет: 'Foo: baz'
$foo->printPHP();       // Выведет: 'PHP просто супер' 
$bar->printItem('aban'); // Выведет: 'Bar: baz'
$bar->printPHP();       // Выведет: 'PHP просто супер'


class MyClass {
    const CONST_VALUE = 'Значение константы';
}

$classname = 'MyClass';
echo $classname::CONST_VALUE; // Начиная с PHP 5.3.0

echo MyClass::CONST_VALUE;


?>
