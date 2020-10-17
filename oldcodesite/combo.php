<?php
//Дан массив с числами. Найдите среднее арифметическое его элементов (сумма элементов делить на количество) не используя цикл.
$arr=range(1,100);
$res=array_sum($arr)/count($arr);
echo $res;
print "\n";

//Найдите сумму чисел от 1 до 100 не используя цикл
echo array_sum($arr);


print "\n";

 //Выведите столбец чисел от 1 до 100 не используя цикл.
$arr=range(1,100);
var_dump($arr);
array_map('echo',$arr);


print "\n";
//Заполните массив 10-ю иксами не используя цикл
$arr=array_fill(0,10,'x');
var_dump($arr);

print "\n";

//Заполните массив 10-ю случайными числами от 1 до 10 так, чтобы они не повторялись. Цикл использовать нельзя
$arr=array_fill(0,100,mt_rand(10));
$arr=array_unique($arr);
$arr=shuffle($arr);
$res=array_splice($arr,0,10);
var_dump($arr);



?>
