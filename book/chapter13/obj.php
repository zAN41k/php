<?php

class obj {

	public function getSum($a,$b) {
	return $a+$b;
}



}
	function funSum($a, $b) {
	return $a+$b;
}

$newObj = new obj();

echo $newObj->getSum(1,2);
echo '<br>';
echo funSum(2,1);

