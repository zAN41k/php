<?php

echo "<pre>";

$number=10;
for($i=0;$i<=$number;$i++) {
	$star=str_repeat('*',($i-1)*2+1);
	$space=str_repeat(' ', $number-$i);
	echo $space.$star. "\n";

}


echo "<pre>";

/*
$number=9;
for($i=0;$i<=$number;$i++) {
	for($j=0;$j<=$number;$j++){
	echo " *";
	//print "\n";

}
print "\n";	

}
*/
$r=10;

function circle ($r) {
$diametr=$r*2+1;

for($i=0;$i<=$diametr;$i++) {
	for($j=0;$j<=$diametr;$j++) {

		$x=$i-$r;
		$y=$j-$r;
	if($x*$x+$y*$y<=$r*$r+1) echo '*';
	      else 
	        	echo " ";
        	echo " ";
        	
}
	print "\n";
}

}
echo "<pre>";

circle(25);

