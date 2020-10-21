<?php
class Foo {
private $name;
private $price;

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

$Bar = new Foo();
$Bar->setName("Hehe");
$Bar->setPrice(50);

var_dump($Bar->getName());
print "\n";
var_dump($Bar->getPrice());



class BaseClass {
   function __construct() {
       print "Конструктор класса BaseClass\n";
   }
}

class SubClass extends BaseClass {
   function __construct() {
       parent::__construct();
       print "Конструктор класса SubClass\n";
   }
}

class OtherSubClass extends BaseClass {
    // наследует конструктор BaseClass
}

// Конструктор класса BaseClass
$obj = new BaseClass();

// Конструктор класса BaseClass
// Конструктор класса SubClass
$obj = new SubClass();

// Конструктор класса BaseClass
$obj = new OtherSubClass();



?>
