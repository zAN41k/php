<?php
class A {
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


class B {
	public $ingr=[];

	public function __construct(array $ingr) {
		$this->ingr=$ingr;
	}

	public function getFullCost(){
	$sum=0;
	foreach($this->ingr as $ingr) {
	$sum+=$ingr->cost;

            }return $sum;
        }


}


$a=new A('kaka',10);
$a2=new A('bebe',9);

$b=new B([$a,$a2]);
echo $a2->getCost();

print "\n";

echo $b->getFullCost();
print "\n";



?>
