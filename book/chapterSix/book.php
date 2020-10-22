<?php
class Entree {
public $name;
public $ingredients=array();

public function hasIngredient($ingredient) {
	return in_array($ingredient,$this->ingredients);
}
public function __construct($name, $ingredients) {
	$this->name = $name;
	$this->ingredients = $ingredients;
}

}



class ComboMeal extends Entree {
public function __construct($name, $entrees) {
parent::__construct($name, $entrees);
foreach ($entrees as $entree) {
if (! $entree instanceof Entree) {
throw new Exception(
'Elements of $entrees must be Entree objects');
}
}
}
public function hasIngredient($ingredient) {
	foreach ($this->ingredients as $entree) {
	if ($entree->hasIngredient($ingredient)) {
	return true;
	      }
	   }
	return false;
	}
}



// Суп, его название и ингредиенты
$soup = new Entree('Chicken Soup', array('chicken', 'water'));
// Сендвич, его название и ингредиенты
$sandwich = new Entree('Chicken Sandwich', array('chicken', 'bread'));
// Составное блюдо
$combo = new ComboMeal('Soup + Sandwich', array($soup, $sandwich));
foreach (['chicken','water','pickles'] as $ing) {
if ($combo->hasIngredient($ing)) {
print "Something in the combo contains $ing.\n";
}
}


/*
Создайте подкласс, производный от представленного в этой главе класса Entree. Этот под-
класс должен принимать объекты типа Ingredient вместо символьной строки с наимено-
ваниями ингредиентов для их обозначения. Введите в этот подкласс метод, возвращающий
общую стоимость блюда.
*/






?>
