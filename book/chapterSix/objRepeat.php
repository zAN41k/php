<?php
class Ingr{
	public $name;
	public $cost;

	public function __construct($name,$cost) {
	$this->name=$name;
	$this->cost=$cost;

}
	public function setCost($cost) {
	$this->cost=$cost;
	}

	public function getCost(){
	return $this->cost;
}

}

class Entree {
	public $Ingr=[];

	public function __construct(array $ingr) {
	$this->ingr=$ingr;
} 
	public function sumCost(){
	$sum=0;
	foreach($this->ingr as $ingr) {
	$sum+=$ingr->cost;
		} return $sum;
	}
}

$i = new Ingr('kartofan',5);
$i2=new Ingr('morkva',10);


$soup= new Entree([$i,$i2]);

echo $soup->sumCost();





?>
