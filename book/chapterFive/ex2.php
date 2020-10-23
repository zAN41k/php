<?php
function restaurant_check($meal, $tax, $tip) {
$tax_amount = $meal * ($tax / 100);
$tip_amount = $meal * ($tip / 100);
return $meal + $tax_amount + $tip_amount;
}
$cash_on_hand = 31;
$meal = 25;
$tax = 10;
$tip = 10;
while(($cost = restaurant_check($meal, $tax,$tip))
< $cash_on_hand) {
$tip++;
print "I can afford a tip of $tip% ($cost)\n";
}

function hello($text) {
	return $text;
}



echo hello('hello');


function param($param) {
	if($param){
	$result='Verno';
	}
	else {
	$result='Neverno';
	}
        return $result;
}

print "\n";
echo param('');

function getDigits($num) 
{
	return str_split($num, 1);
}
var_dump(getDigits(123));

function arrayS($arr) {
  $sum=0;
  foreach($arr as $v) {
  $sum+=$v;


 }
 return $sum;
}

$arr=range(1,10);
var_dump(arrayS($arr));

echo diap(0);
print "\n";
function diap($num) {
	if($num>=1 and $num<=9) {
	return true;
	}else return false; 
         }

echo diap(1);
print "\n";

function inRange($num) 
{
	$sum = array_sum(getDigits($num));

	if ($sum >= 1 and $sum <= 9) {
		return true;
	} else {
		return false;
	}
}
$arr = [11, 15, 28, 13, 14, 345];
$result = [];

foreach ($arr as $elem) {
	if (inRange($elem)) { //если подходит - берем
		$result[] = $elem;
	}
}
var_dump($result);



?>

