<?php


	function circle ($r) {
		$diametr=2*$r+1;
		for($i=0;$i<=$diametr;$i++) {
			for($j=0;$j<=$diametr;$j++) {
				$x=$i-$r;
				$y=$j-$r;
				if($x*$x+$y*$y <=$r*$r+1) echo "*";
					else echo " ";
					echo " ";
		}
			print "\n";

	}
	

}

echo "<pre>";

circle(9);

	function triangle ($r) {
		for($i=0;$i<=$r;$i++) {
		$star=str_repeat("*",($i-1)*2+1);
		$space=str_repeat(' ', $r-$i);
		echo $space.$star. "<br>"; 

	}
	print "\n";	
	

}
echo "<pre>";
triangle(17);


 function square ($r) {
                   $diametr=$r;
                   for($i=0;$i<=$diametr;$i++) {
                           for($j=0;$j<=$diametr;$j++) {
			echo " *";	
		}
		print "\n";
	}
}
echo "<pre>";
square(17);



	function triangle2 ($r) {
		$j=$r;

		for($i=0;$i<=$r;$i++,$j--) {
		if($i<$r/2) {
			$star=str_repeat("*",($i-1)*2+1);
			$space=str_repeat(' ', $r-$i);
			echo $space.$star. "<br>"; 
		}
		if($i>$r/2) {
	  		$star=str_repeat("*",($j-1)*2+1);
                	$space=str_repeat(' ', $r-$j);
                	echo $space.$star. "<br>";
	}

	}
	print "\n";	
	

}
echo "<pre>";
triangle2(35);


	function krest ($r) {
		$diametr=2*$r;
		for($i=0;$i<=$diametr;$i++) {
			for($j=0;$j<=$diametr;$j++) {
				if($i==$diametr/4 OR $j==$diametr/2) echo "*";
					else echo " ";
					echo " ";
		}
			print "\n";

	}
	

}
echo "<pre>";
krest(8);
