<?php
class Ingredient {

private $name;
private $coast;
/*
public function __construct (?string $nameIng,int $coast) {
         $this->nameIng=$nameIng;  
	 $this->coast=$coast;
	}

*/
public function setCoast(int $coast) {
	$this->coast=$coast;
}
public function setName(string $name) {
	$this->name=$name;
}


public function getCoast(){
	return $this->coast;
}

public function getName(){
	return $this->name;
}
}
//Введите в свой новый класс Ingredient метод, изменяющий стоимость ингредиента блюда.

$One = new Ingredient();
$One->SetCoast(50);
$One->setName('Apple');

//var_dump($One->getCoast);
var_dump($One->getName());
var_dump($One->getCoast());

?>
