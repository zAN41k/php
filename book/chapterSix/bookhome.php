<?php
/*
1. Создайте класс Ingredient. Каждый экземпляр этого класса должен представлять отдельный
ингредиент блюда, а также отслеживать наименование ингредиента и его стоимость.
2. Введите в свой новый класс Ingredient метод, изменяющий стоимость ингредиента блюда.
*/

class Ingredient {
private $ing=string;
private $price=int;


public function __construct($ing,$price) {
	$this->ing=$ing;
	$this->price=$price;


}

public function setPrice(int $price){
	$this->price=$price;
}

public function getPrice(){
     return $this->price;
}

public function getIng(){
	return $this->ing;
}


}


$ingr= new Ingredient('картошка',10);
$ingr->setPrice(5);
//print $ingr.$ing;
echo $ingr->getPrice() . PHP_EOL;

echo $ingr->getIng();







?>
