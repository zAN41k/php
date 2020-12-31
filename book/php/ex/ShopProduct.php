<?php

class ShopProduct {
	public $title;
	public $producerMainName;
	public $producerFirstName;
	public $price=0;

	public function __construct(string $title,string $firstName,string $mainName,float $price) {
		$this->title = $title;
		$this->producerFirstName = $firstName;
		$this->producerMainName = $mainName;
		$this->price = $price;
	} 

	public function getProducer() {
		return $this->producerFirstName . " "
			. $this->producerMainName;
			
}

}

$product = new ShopProduct('Flowers for Elendjeron','Mihail','Bulgakov',100);

echo $product->getProducer();
print "\n";

class ShopProductWriter {

	public function write(ShopProduct $shopProduct) {

	$str =  $shopProduct->title . ": " 
		. $shopProduct->getProducer()
		. " (" .$shopProduct->price . ") \n";
		print $str;
    }
	public function secondWrite($shopProduct) {
	$str="";

	foreach($shopProduct as $product) {
	$str .= $product.' ';	
	
}
	echo $str;

} 	

}


$writer = new ShopProductWriter();
$writer->write($product);
$writer->secondWrite($product);
