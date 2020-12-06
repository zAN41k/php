<?php
class People {
	public $weight;
	public $floor;

	public function __construct ($weight,$floor){
	$this->weight=$weight;
	$this->floor=$floor;
    } 
	
	public function setWeight($weight) {
	$this->weight=$weight;
    }

	public function getWeight(){
	return $this->weight;
    }

        public function setFloor($floor) {
          $this->floor=$floor;
     }
  
          public function getFloor(){
          return $this->floor;
     }

	public function Alarm() {
	$alarm='Ожидайте пока не приедет помощь';

	return $alarm; 
}


}


class Elevator {
	public $people=[];

	public function __construct(array $people) {
		$this->people=$people;
    }
	
	public function sumWeight(){
	$sum=0;
	foreach($this->people as $people) {
		$sum+=$people->weight;
	}return $sum;
    }
	
	public function floors() {
	$floor=[];
	foreach($this->people as $people) {
		$floor[]=$people->floor;
	}return $floor;
}

}



$p = new People(100,2);
$p2 = new People(80,5);
$p3 = new People(90,10);

//echo $p->Alarm();


$elevator = new Elevator([$p,$p2,$p3]);

$peolpleWeight = $elevator->sumWeight();
$peopleFloor = $elevator->floors();
//var_dump($peopleFloor);

	if($peolpleWeight>=800)  {
		echo 'Максимально допустимый вес 800 кг';
		}else
	 {
	echo 'Двери закрываются!';
	echo '<br>';
	foreach($peopleFloor as $v) {
		echo 'Отправляемся на этаж номер: ' , $v;
		echo '<br>';
	}
		
	echo '<br>';
	}

