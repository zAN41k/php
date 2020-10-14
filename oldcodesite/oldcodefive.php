<?php
//Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.
$arr = ['html', 'css', 'php', 'js', 'jq'];
foreach ($arr as $value ) {
  echo $value;
  print "\n";
}


print 'Дан массив с элементами 10, 20, 15, 17, 24, 35. Найдите сумму элементов этого массива. Запишите ее в переменную $result.';

$arr=[10,20,15,17,24,35];
foreach($arr as $v) {
$result+=$v;
}
print "\n";
echo $result;
print "\n";


print 'Выведите столбец чисел от 1 до 100.';
$i=0;
while($i<=100) {
 echo $i;
 $i++;
 print "\n";
 } 

print "\n";
  
print 'Дан массив с элементами 1, 2, 3, 4, 5. С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result.';
$result=0;
$arr=[1,2,3,4,5];
foreach($arr as $v) {

   $result+=$v*$v;
   
}
print "\n";
echo $result;
print "\n";

print 'Дан массив $arr. С помощью цикла foreach выведите на экран столбец ключей и элементов в формате green - зеленый.';
$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
print "\n";
foreach($arr as $key => $value) {
  echo $key .' - '. $value;
  print "\n";
}

print 'Дан массив $arr с ключами Коля, Вася, Петя и с элементами 200, 300, 400. С помощью цикла foreach выведите на экран столбец строк такого формата: Коля - зарплата 200 долларов..';
print "\n";
$arr=['Коля'=>'200','Вася'=>'300','Петя'=>'400'];
foreach($arr as $key => $v) {
    echo $key.'- зарплата ' . $v.' долларов';
    print "\n";

}

//Выведите столбец чисел от 1 до 100.
$i=1;
while($i<=100) {
  echo ' '.$i;
  $i++;
}
print "\n";

for($i=1;$i<=100;$i++) {
   echo ' '.$i;
} 
print "\n";

//Выведите столбец чисел от 11 до 33.
$i=11;
while($i<=33) {
 echo $i;
 print "\n";
 $i++;
}
print "\n";

for($i=11;$i<=33;$i++) {
 echo $i;
 print "\n";

}


// Выведите столбец четных чисел в промежутке от 0 до 100.
$i=1;
while($i<=100) {
if($i%2==0) echo ' '.$i; 
$i++;
}
print "\n";
//С помощью цикла найдите сумму чисел от 1 до 100.
for($i=1;$i<=100;$i++) {
  $sum+=$i; 
   
}
 echo $sum;
print "\n";

// Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if выведите на экран столбец тех элементов массива, которые больше 3-х, но меньше 10.

$arr=[2,5,9,15,0,4];
foreach($arr as $v) {
if($v>3  and $v<10) {
echo $v;
print "\n";
 }
} 
print "\n";
//  Дан массив с числами. Числа могут быть положительными и отрицательными. Найдите сумму положительных элементов этого массива.
$sum=0;
$arr=[1,2,4,-2,-7,2];
foreach($arr as $v) {
if($v>0) {
$sum+=$v;

}
}
echo 'Сумма положительных чисел = ', $sum;
print "\n";

//Дан массив с элементами 1, 2, 5, 9, 4, 13, 4, 10. С помощью цикла foreach и оператора if проверьте есть ли в массиве элемент со значением, равным 4. Если есть - выведите на экран 'Есть!' и выйдите из цикла. Если нет - ничего делать не надо.

$arr=[1,2,5,9,4,13,4,10];
foreach($arr as $v) {
if($v==4) {
echo 'Елемент в массиве есть  ', $v;
break; 
}
}

print "\n";

// Дан массив числами, например: ['10', '20', '30', '50', '235', '3000']. Выведите на экран только те числа из массива, которые начинаются на цифру 1, 2 или 5.
$arr=['10','20','30','50','235','3000'];
foreach($arr as $v) {
if($v[0]==1 or $v[0]==2 or $v[0]==5) {
echo 'Число начинается с 1.2 или 5 ' ,$v;
print "\n";
}


}
print "\n";

//Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку '-1-2-3-4-5-6-7-8-9-'.
$str='';
$arr=[1,2,3,4,5,6,7,8,9];
foreach($arr as $v){
if(empty($str)){
$str.='-';
}
if(!empty($str)) { 
$str.=$v.'-';
}
}
echo $str;

print "\n";
//!!!!!!!!!Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а выходные дни выведите жирным.!! Подумать как вывести жирным
$arr=['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье'];
foreach($arr as $v) {
   echo $v;
   print "\n";
  // if($v=='Суббота') { echo '<b>' . $v .'</b>';}
  // if($v=='Воскресенье') { echo '<b>' . $v .'</b>';}

} 
print "\n";


//!!!!!!!!!!!!Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом. Текущий день должен храниться в переменной $day.


// С помощью цикла for заполните массив числами от 1 до 100. То есть у вас должен получится массив [1, 2, 3... 100].
$arr=[];
for($i=1;$i<=100;$i++) {
$arr[$i]=$i;

}
foreach($arr as $v) {
 echo $v;
 print "\n";
}

print "\n";

//!!!!!!!!!!!Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а русские - в массив $ru.

//Дано число $num=1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для этого (итерация - это проход цикла). Решите задачу сначала через цикл while, а потом через цикл for.

$num=1000;
$i=0;
while($num>50) {
$num/=2;
$i++;
echo $num;
print "\n";
}
echo 'Число получилось ', $num .' '. 'количество итераций ', $i; 




?>