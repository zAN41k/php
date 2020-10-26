<?php
class Ingr{
	public $name;
	public $cost;

	public function __construct($name,$cost){
		$this->name=$name;
		$this->cost=$cost;
	}
	
	public function setCost($cost){
		$this->cost=$cost;
	} 

	public function getCost(){
	      return $this->cost;
              
	}
}

class Entree{
	public $ingr=[];

	public function __construct(array $ing){
		$this->ing=$ing;
	}

	public function getSum(){
	$sum=0;
	foreach($this->ing as $ingr){
		$sum+=$ingr->cost;
	   }    return $sum;
	}


}

$i=new Ingr('One',5);
$i2=new Ingr('Two',2);

var_dump($i->getCost());
$soup= new Entree([$i,$i2]);

echo $soup->getSum();


?>
