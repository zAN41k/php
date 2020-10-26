<?php
//Создайте класс Ingredient. Каждый экземпляр этого класса должен представлять отдельный
//ингредиент блюда, а также отслеживать наименование ингредиента и его стоимость.
class In {
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

class Entree {
	public $In=[];
        
	public function __construct(array $in){
		$this->in=$in;
	} 
        
	public function hello(){
        echo 'Hello';
        print "\n";
 }
	public function getSumCost(){
   		$sum=0;
	   	 foreach($this->in as $in){
       		 $sum+=$in->cost;

		 }	
                  return $sum;
	}
}

$ingr1= new In('kartofan',10);
$ingr2= new In('Morkva',11);
$ingr3= new In('Look',5);

$borch= new Entree([$ingr1,$ingr2,$ingr3]);
$borch->hello();
$bo= new A([$ingr1,$ingr2,$ingr3]);
echo $bo->getUnit();
echo $bo->getSumCost();
$bo->hello();
//echo $borch->getSumCost();

class A extends Entree {//наследуем класс Entree для того чтобы переопределить
        public function hello(){
	echo 'Hello THERE! A ';
        print "\n";
}


	public function getSumCost() {
         $sum=0;
         foreach($this->in as $in){
                   $sum+=$in->cost;
                   }
                    return $sum*$sum;

}
	public function getUnit(){
	$str='';
	foreach($this->in as $in){
	$str.=$in->name.' ';
         
} return $str;




}




}


?>
