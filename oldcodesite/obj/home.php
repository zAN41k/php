<?php
class Ingr {
	public $name;
	public $cost;

	public function __construct ($name,$cost) {
		$this->name=$name;
		$this->cost=$cost;
} 

	public function setCost($cost){
		$this->cost=$cost;
}


}

class Entree {
	public $ingr=[];

	public function __construct(array $ingr) {
		$this->ingr=$ingr;
} 

	public function getSum() {
	$sum=0;
	foreach($this->ingr as $ingr) {
	$sum+=$ingr->cost;
} 	return $sum;


}



}

$i=new Ingr('Kartowka',10);
$i2=new Ingr('Svekla',15);

$soup=new Entree([$i,$i2]);

echo $soup->getSum();




?>
