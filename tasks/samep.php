<?php

$number=10;

function pyramida($number) {
	for($i=1;$i<=$number;$i++) {
	$star = str_repeat('*',($i-1)*2+1);
	$space = str_repeat(' ', $number-$i);
	echo $space.$star. '<br>';

	}
}
echo "<pre>";

//pyramida($number);


function square($number) {
	for($i=1;$i<=$number;$i++) {
		$star=str_repeat(' *', $number);
		echo $star. '<br>';
	}

}
echo "<pre>";
//square($number);


//нарисовать круг для этого использую формулу где $r это радиус $c это длина окружности
$c = 200;
$r=floor($c/(2*3.14)); 

  
function circle($dlina) {
	$radius=$dlina/(2*3.14);
          for($i=1;$i<=$radius;$i++) {
		if($i<=$radius);
		echo '*'. '<br>';
          
          }
  }
  echo "<pre>";


circle($c);
