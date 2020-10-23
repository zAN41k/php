<?php
class Entree {
public $name;
public $ingredients=array();

public function hasIngredient($ingredient) {
	return in_array($ingredient,$this->ingredients);
}
public function __construct(array $ingredients) {
	$this->ingredients = $ingredients;

	}


}




class Ingredient  {
	public $cost;


	public function __construct($name,$cost){
		$this->name=$name;
		$this->cost=$cost;
	}

	public function setCost($cost){
		$this->cost=$cost;
	}
	
	public function getName(){
		return $this->name;
	}

	public function getCost(){
		return $this->cost;
	}


	public function getFullCost() {
		$sum=0;
		foreach($this->ingridients as $ingridient){
		$sum+=$ingridient->cost;
	}

		return $sum;
	}




}

$ingredient1 = new Ingredient('potatoes', 5);
$ingredient2 = new Ingredient('carrots', 10);
$ingredient3 = new Ingredient('onions', 15);

$soup = new Entree([
    $ingredient1,
    $ingredient2,
    $ingredient3
]);

echo $ingredient1->getName();
print "\n";
echo $ingredient1->getCost();
echo $ingredient1->getFullCost(); 

  







?>
