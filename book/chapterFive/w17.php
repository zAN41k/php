<?php
//Дан массив с числами. Создайте из него новый массив, где останутся лежать только положительные числа. Создайте для этого вспомогательную функцию isPositive, которая параметром будет принимать число и возвращать true, если число положительное, и false - если отрицательное.

$arr=[1,-2,-3,5,10];
$res=[];

function ifPositive($num) {
	if($num>=0) {
        return true; 
	}else return false;        
}

foreach($arr as $v){
       if(ifPositive($v)) {
       $res[]=$v;
	}

	}
//var_dump($res);
print "\n";
// Сделайте функцию isNumberInRange, которая параметром принимает число и проверяет, что оно больше нуля и меньше 10. Если это так - пусть функция возвращает true, если не так - false.
function isNumberInRange($num){
       if($num>0 and $num<10) {
	return true;
	}else return false;

	}
//echo isNumberInrange(5);


print "\n";
// Дан массив с числами. Запишите в новый массив только те числа, которые больше нуля и меньше 10-ти. Для этого используйте вспомогательную функцию isNumberInRange из предыдущей задачи.
$arr=[-1,2,-3,6,7,0,10];
foreach($arr as $v){
	if(isNumberInRange($v)){
	$res2[]=$v;
} 
}
//var_dump($res2);

print "\n";

//Сделайте функцию getDigitsSum (digit - это цифра), которая параметром принимает целое число и возвращает сумму его цифр.
function getDigitsSum($num) {
	return array_sum(str_split($num,1));

}

//echo getDigitsSum(55);

print "\n";
// Найдите все года от 1 до 2020, сумма цифр которых равна 13. Для этого используйте вспомогательную функцию getDigitsSum из предыдущей задачи.
$arr=range(1,2020);
foreach($arr as $v) {
	if(getDigitsSum($v)==13) {
        $res3[]=$v;
       // var_dump($res3); 
	}
}
//var_dump($res3);

//Сделайте функцию isEven() (even - это четный), которая параметром принимает целое число и проверяет: четное оно или нет. Если четное - пусть функция возвращает true, если нечетное - false.
function isEven($num) {
 if($num%2==0) {
	return true;
} else {
	return false;

}
}


print "\n";

//Дан массив с целыми числами. Создайте из него новый массив, где останутся лежать только четные из этих чисел. Для этого используйте вспомогательную функцию isEven из предыдущей задачи.
$arr=range(1,50);
foreach($arr as $v) {
	if(isEven($v)) {
        $res4[]=$v;
}
	
}
//var_dump($res4);

print "\n";

//Сделайте функцию getDivisors, которая параметром принимает число и возвращает массив его делителей (чисел, на которое делится данное число).

function getDivisors($num) {
	$arr2=[];
        for($i=0;$i<=$num;$i++) {
	if($num%$i==0) {
        return true;
                
              }else return false;
        
	}

}
echo getDivisors(25);








?>
