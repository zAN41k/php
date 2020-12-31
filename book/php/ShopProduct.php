<?php

class ShopProduct {

	public $title;
	public $producerMainName;
	public $producerFirstName;
	public $price;

	public function __construct(
      		string $title,
		string $firstName,
		string $mainName,
		float $price

	){
		$this->title = $title;
		$this->producerFirstName = $firstName;
		$this->producerMainName = $mainName;
		$this->price = $price;
	}

	public function getProducer (){
		return $this->producerFirstName . " "
			. $this->producerMainName;
	}
	
	public function getSummaryLine() {
		$base= "{$this->title} ({$this->producerMainName} ";
		$base.= "{$this->producerFirstName} )";
  		return $base;	
	}		

}

class CdProduct extends ShopProduct {
	public $playLength;

	public function __construct(
	string $title,
	string $firstName,
	string $mainName,
	float $price,
	int $playLength		
) {
	parent::__construct(
	$title,
	$firstName,
	$mainName,
	$price
	);
	$this->playLength = $playLength;
}
	

	public function getPlayLenth() {
		return $this->playLength;
	}

	public function getSummaryLine() {
		$base  = parent::getSummaryLine();
		$base .= ": Время звучания - {$this->playLength}";
		return $base; 
	}

}

class BookProduct extends ShopProduct {

	public $numPages;
	
	public function __construct(
	string $title,
	string $firstName,
	string $mainName,
	float $price,
	int $numPages
){
	parent::__construct(
	$title,
	$firstName,
	$mainName,
	$price
);
	$this->numPages = $numPages;

}


	public function getNumberOfPages(){
		return $this->numPages;
}

	public function getSummaryline() {
		$base = parent::getSummaryLine(); 
		$base .= ": {$this->numPages} стр.";
		return $base;

}

}


class ShopProductWriter {
	private $products = [];
	
	public function addProduct(ShopProduct $shopProduct) {
	$this->products[]=$shopProduct;

}

	public function write() {
	$str="";
	foreach($this->products as $shopProduct) {
	$str.="{$shopProduct->title}: ";
	$str.=$shopProduct->getProducer();
	$str.=" ({$shopProduct->getPrice()}) <br /> \n";

	}
	print $str;
}



}

$product = new CdProduct('Классическая музыка.Лучшее',
			 'Антонио',
		       	'Вивальди',
			'10.99',
			
			'60.33');
echo "Исполнитель : {$product->getProducer()} \n";
echo $product->getSummaryLine();
print "\n";

$product2 = new BookProduct ('Основание','Айзек','Азимов','12', 300, 0);
echo 'Книга: ' ,$product2->getSummaryLine();
