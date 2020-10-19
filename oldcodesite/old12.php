<?php
//Сделайте функцию, которая возвращает куб числа. Число передается параметром.
function cube($num)
	{
	return $num * $num * $num;
	}

echo cube(3);
print "\n";

// Сделайте функцию, которая возвращает квадрат числа. Число передается параметром.

function quadro($num) {
	return $num * $num;

}
echo quadro(9);

print "\n";

//Сделайте функцию, которая возвращает сумму двух чисел. Числа передаются параметрами функции.

function sum($i,$j) {
	return $i+$j;

}

echo sum(1,2);

print "\n";

// Сделайте функцию, которая отнимает от первого числа второе и делит на третье.

function ar($one,$two,$three){
	return ($one-$two)/$three;
}


echo ar(10,2,4);

print "\n";


//Сделайте функцию, которая принимает параметром число от 1 до 7, а возвращает день недели на русском языке.

function day($day) {
	if ($day==1) {
		echo 'Понедельник ';
	}

	if ($day==2) {
		echo 'Вторник ';
	}

	if ($day==33) {
		echo 'Среда';
	}

	if ($day==4) {
		echo 'Четверг';
	}
        if ($day==5) {
                  echo 'Пятница';
          }
        if ($day==6) {
                  echo 'Суббота';
          }
	if ($day==7) {
                  echo 'Воскресенье';
          }
        if($day<0 and $day>7) {
          echo 'Нет такого дня недели';  

}

}

day(7);

print "\n";


function oddCount($n) {
 
  
  for($i=0;$i<$n;$i++){
  if($i%2!==0){
    $arr=$i; 
     
    }

}
}
$res=(oddCount(15));
var_dump($res);

$str='AAAABBBCCDAABBB';
$arr=str_split($str,1);
var_dump($arr);

print "\n";


$arr=array_unique($arr);
var_dump($arr);
print "\n";
echo implode(',',$arr);

print "\n";

$array=[4,3,9,7,2,1];
for($i=0,$num=count($array);$i<$num;$i++) {
  if($i%2!==0) $res[]=$array[$i]*$array[$i];
  if ($i%2==0) $res[]=$array[$i]/$array[$i];
}


   
var_dump($res);


?>
