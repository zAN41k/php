<?php
class Entree {
public $name;
public $ingredients=array();

public function hasIngredient($ingredient) {
	return in_array($ingredient,$this->ingredients);
}

}

$soup = new Entree;
$soup->name= 'Chicken Soup';
$soup->ingredients=array('chicken','water');

$sandwich = new Entree;
$sandwich->name = 'Chicken Sandwich';
$sandwich->ingredients=array('chicken','bread');

foreach(['chicken','lemon','bread','water'] as $ing) {
	if($soup->hasIngredient($ing)) {
       		print "Soup contains $ing.\n"
        }	
	if($sandwich->hasIngredient($ing)) {
		print "Sandwich contains $ing.\n"
        }
}
 






?>
