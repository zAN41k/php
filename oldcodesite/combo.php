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
$arr=range(1,10);
shuffle($arr);
var_dump($arr);

//Найдите факториал заданного числа не используя цикл. Факториал - это произведение чисел от 1 до заданного числа включительно
$arr=range(1,5);
$arr=array_product($arr);
var_dump($arr);
print "\n";

// Дано число. Найдите сумму цифр этого числа не используя цикл.
$i=1234567;
$res=str_split($i,1);
echo 'Сумма цифр равна ', array_sum($res);

print "\n";

// Дана строка. Сделайте заглавным последний символ этой строки не используя цикл
$str='done';
$str = strrev($str);
$str = ucfirst($str);
$str = strrev($str);

echo $str;
print "\n";
//Дан массив с числами. Получите из него массив с квадратными корнями этих чисел не используя цикл
$arr=range(1,5);
$arr=array_map('sqrt',$arr);

var_dump($arr);

print "\n";

// Заполните массив числами от 1 до 26 так, чтобы ключами этих чисел были буквы английского алфавита: ['a'=>1, 'b'=>2...]. Сделайте это не используя цикл
$arr=range(1,26);
$arr2=range('a','z');
$arr=array_combine($arr,$arr2);
var_dump($arr);

print "\n";

//Дана строка с числами '1234567890'. Найдите сумму пар чисел: 12+34+56+78+90. Решите задачу, не используя цикл
$str='1234567890';
$res=str_split($str,2);
echo array_sum($res);


?>
