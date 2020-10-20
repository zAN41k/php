<?php

class Entree {
public $name;
public $ingredients = array();
public function hasIngridient($ingredient) {
return in_array($ingredient, $this->ingredients);
}
}


$soup new Entree;
$soup->name='Chicken Soup';
$soup->ingredients = array('chicken','bread');

$sandwich new Entree;
$sandwich->name='Chicken sandwich';
$sandwich->ingridients= array('chicken','bread');

foreach (['chicken','lemon','bread','water'] as $ing) {
	if($soup->hasIngredient($ing)){
	print "Soup contains $ing.\n";  
	 }
	if($sandwich->hasIngridients($ing)){
	print "Sandwich contains $ing.\n";
	}
}




?>
