<?php
class Ingredient{
	public $name;
	public $cost;

	public function __construct($name,$cost){
	$this->name=$name;
	$this->cost=$cost;
}

	public function setCost($cost){
	$this->cost=$cost;
}
}

class Entree{
	public $ingredient=[];

	public function __construct(array $ingr) {
	$this->ingr=$ingr;
}

	public function getSum(){
	$sum=0;
	foreach($this->ingr as $ingr){
	$sum+=$ingr->cost;	
	}return $sum;
}


}
$i=new Ingredient('kartow',10);
$i2=new Ingredient('Ruba',20);



$soup=new Entree([$i,$i2]);

echo $soup->getSum();




?>
