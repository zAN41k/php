<?php

function elk($number) {
	for($i = 1;$i <= $number;$i++) {
	$star = str_repeat('*',($i-1)*2+1);
	$space = str_repeat(' ',$number - $i);
	echo $space.$star. '<br>'; 

}
}
echo "<pre>";
elk(30);
