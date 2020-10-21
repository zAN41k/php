<?php
class Foo {
private $name=string;
private $price=int;

//создаем конструктор
public function __construct($name,$price) {
	$this->name=$name;
	$this->price=$price;
}

public function printItem($string) {     //определяем метом в основном классе, который принимает параметр строку и выведем нам FOO строка сообщение
	echo 'Foo: ' . $string . PHP_EOL;
  }
public function phpPrint(){              //определяем метод, который будет выводить PHP принт
	echo 'PHP print'. PHP_EOL;
}

public function setName(?string $name) {
	$this->name=$name;

}
public function setPrice(int $price) {
	$this->price=$price;

}
public function getName() {
	return $this->name;

}

public function getprice() {
	return $this->price;

}
}
//next class extend foo

class Bar extends Foo {
public function printItem($string) {
	echo 'Bar:' . $string . PHP_EOL;   //переопределяем метро printItem заменяя в наследнике Foo на Bar, тем самым меняя метод
}

public function phpPrint(){	
	echo 'PHP print переопределен в наследнике' . PHP_EOL; //переопредиляем метод phpPrint чтобы он выводил другое сообщение, можно было так же оставить его неизменным
 
}
}

$foo= new Foo();
$bar= new Bar();
$foo->printItem('Yes');
$foo->phpPrint();

$bar->printItem('No');
$bar->phpPrint();












?>
