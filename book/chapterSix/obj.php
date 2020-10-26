<?php
class Entree {
	public $name;
	public $ingredients = array();
	public function __construct($name, $ingredients) {
		$this->name = $name;
		$this->ingredients = $ingredients;
	}
	public function hasIngredient($ingredient) {
		return in_array($ingredient, $this->ingredients);
	}
}


class Ingredient{
	public $name;
	public $coast;
        public function __construct($name, $cost)
    {
        $this->name = $name;
        $this->cost = $cost;
    }
 

        public function setCoast($coast){
		$this->coast=$coast;
	}
        
        public function getCoast(){
	return $this->coast;
	} 
}

// Создайте подкласс, производный от представленного в этой главе класса Entree. Этот под-
//класс должен принимать объекты типа Ingredient вместо символьной строки с наимено-
//ваниями ингредиентов для их обозначения. Введите в этот подкласс метод, возвращающий
//общую стоимость блюда.

class podClass {
     public $ingredients=[];
     public function __construct(array $ingredients)
    {
        $this->ingredients = $ingredients;
    }

    
     public function sumCoast() {
         $sum=0;
         foreach($this->ingredients as $ingredient) {
         $sum+=$ingredient->coast;
	}  return $sum;        

	}  

}

$ingr1 = new Ingredient('potatoes', 5);
$ingr2 = new Ingredient('carrots', 10);
$ingr3 = new Ingredient('onions', 15);

//var_Dump($ingr1);
var_dump($ingr1->$ingridietns);
$ingr1->getCoast();
$soup = new podClass([$ingr1,$ingr2,$ingr3]);

echo $soup->sumCoast();







?>
