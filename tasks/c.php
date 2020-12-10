<?php

	function c ($r) {
	$N=$r*2+1;
	for($i=0;$i<$N;$i++) {
	   for($j=0;$j<$N;$j++) {
		$x=$i-$r;
		$y=$j-$r;
		if($x*$x+$y*$y <= $r*$r+1) echo "*";
		else echo " ";
		echo " ";
}
	print "\n";

}

}

echo "<pre>";

//c(8);

	function t($t) {
	for($i=0;$i<$t;$i++) {
	$star=str_repeat("*",($i-1)*2+1);
	$space=str_repeat(" ",$t -$i);
	echo $space.$star. '<br>';


}

}

echo "<pre>";

//t(17);



	function k ($k) {
//	$N=$k*4;
	for($i=0;$i<$k;$i++) {
	   for($j=0;$j<$k;$j++) {
		$x=$i-$k;
		$y=$j-$k;
		if($x*4 <= $k) echo "*";
		else echo " ";
		echo " ";
}
	print "\n";

}

}
echo "<pre>";
//k(28);



	function pir($a,$b,$c) {
	$p=$a+$b+$c;
	for($i=0;$i<$p;$i++) {
		for($j=0;$j<$p;$j++) {
		$x=$p-$i;
		$y=$p-$j;
		$z=$p-$j; 
		if($x+$y+$z <= $p + 1) echo "*";
		else echo " ";
		echo " ";
	
	}
	print "\n";
}

}

echo "<pre>";

pir(3,10,2);
