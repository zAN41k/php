<?php
function pyramida($number) {
    for($i = 1; $i <= $number; $i++) {
        $stars = str_repeat('*', ($i - 1) * 2 + 1);
        $space = str_repeat(' ', $number - $i);
       echo $space . $stars . '<br/>';
	//echo $stars . '<br>';
    }
}
echo "<pre>" ;
pyramida(15);
