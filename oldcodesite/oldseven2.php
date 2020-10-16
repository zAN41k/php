<?php
//Узнайте код символов 'a', 'b', 'c', пробела.
echo ord('a');

print "\n";
echo ord('b');

print "\n";
echo ord('c');

print "\n";
echo ord(' ');

print "\n";

//Выведите на экран символ с кодом 33.

echo chr('33');

print "\n";

//Запишите в переменную $str случайный символ - большую букву латинского алфавита.
$str=chr(mt_rand(65,90));
echo $str;


print "\n";

//Запишите в переменную $str случайную строку $len длиной, состоящую из маленьких букв латинского алфавита. Подсказка: воспользуйтесь циклом for или while.
$str='';
for($i=0;$i<=25;$i++){
$str[$i]=chr(mt_rand(97,122));  


}
echo $str;
print "\n";

// Дана буква английского алфавита. Узнайте, она маленькая или большая.
$a='k';
if(ord($a)>=97 and ord($a)<=122) {
echo 'Буква маленькая ', $a;
}
if(ord($a)>=65 and ord($a)<=90) {
echo 'Буква большая ' , $a;
}


print "\n";

//Дана строка 'ab-cd-ef'. С помощью функции strchr выведите на экран строку '-cd-ef'.
$str='ab-cd-ef';
echo strchr($str,'-');

print "\n";
//Дана строка 'ab-cd-ef'. С помощью функции strrchr выведите на экран строку '-ef'
$str='ab-cd-ef';
echo strrchr($str,'-');


print "\n";
//Дана строка 'ab--cd--ef'. С помощью функции strstr выведите на экран строку '--cd--ef'.
$str='ab--cd--ef';

echo strstr($str,'--');

print "\n";

//Преобразуйте строку 'var_test_text' в 'varTestText'. Скрипт, конечно же, должен работать с любыми аналогичными строками.

$str='lol_omomom_dadada';
$arr = explode('_', $str);
var_dump($arr);
for($i=0,$num=count($arr);$i<$num;$i++) {
if($i==0) {
$arr[$i]=($arr[$i]);
}
if($i!==0){
$arr[$i]=ucfirst($arr[$i]);
}

}
print "\n";
var_dump($arr);
print "\n";


//Дан массив с числами. Выведите на экран все числа, в которых есть цифра 3.

$arr=[1,2,3,53,23,33,44,56,93];
foreach ($arr as $v) { 
    if (strpos($v, '3') !== false) { 
    echo $v;
    print "\n"; 
    } 
    } 

print "\n";

?>

