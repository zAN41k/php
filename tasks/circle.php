<?php
//Уравнение окружности с радиусом r и центром в начале декартовой системы координат: 
// 

	function сircle($r) { 
	// задаем размеры фигуры
	$N = 2 * $r + 1; 
	$y = 0; ; // x y координаты внутри круга 
	$x = 0;
	$step=1;
	$step2=1;
	// С помощью двух циклов рисуем квадрат  
	for ($i = 0; $i < $N; $i+=$step) 
	{ 
		for ( $j = 0; $j < $N; $j+=$step2) 
		{ 
			$x = $i - $r; 
			$y = $j - $r; 

			// Используем уравнение окружности, при котором сравниваем суммы квадратов х и y меньше они или равны квадрату радиуса + 1
			//если они меньше, то значит они находятся в круге и мы рисуем точку
			
			if (($x * $x + $y * $y >= $r * $r + 1) AND ($x * $x + $y * $y <= $r * $r + 1)) 
				echo ("*");
			else // если сумма квадратов больше чем х и у , то рисуем пробел				
				echo ' ';
			echo  ' '; 
		} 
	echo "\n"; 
	} 
} 

echo "<pre>";
сircle(17); 
/*
$N=10;
for ($i = 0; $i < $N; $i++){
                  for ( $j = 0; $j < $N; $j++) {
		echo 'i= '.$i .' j= '.$j;
		echo "\n";	
	}	
	echo "\n";
}
*/

