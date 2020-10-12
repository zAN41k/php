<?php
/*
Определите истинность или ложность приведенных ниже выражений, не прибегая к помощи
интерпретатора РНР.
100.00 - 100 в первом случае результат будет равен 0, что для булево будет false 
"zero"   - строка дает true если это не пустая строка! 
"false"  - так это строка, а строка дает true 
0 + "true"  - false, так как сложение идет с 0
0.000   - false 
0 <=> "0"   - false приводится к нулю 
strcmp("false","False")  - так как это строка, то true 
"0.0"  - строка true
Большинство скалярных значений являются истинными. Все числа с плавающей точкой и целые
числа, кроме 0 и 0.0, а также все символьные строки, кроме пустой или содержащей символ 0,
являются истинными. Специальные константы false и null вычисляются как ложные, а значения
всех остальных констант — как истинные 1 .
Переменная, равная одному из ложных з
Пустой массив также вычисляется как ложный

if ("0.0") {
print "true";
}
else {
print "false";
 }
*/
/*
$age = 12;
$shoe_size = 13;

if ($аgе > $shoe_size) //условие не выполнится так как age меньше shoe_size, передаст управление на esleif
print "Message 1."; // не выполнится
elseif (($shoe_size++) && ($age > 20)) // выполнится только в том случае если два оператора истинные, shoe_size будет 14 что дает true , но age меньше 20, но никак не больше , что дает false, в данном случае оператор не отработает и передаст значение на else 
print "Message 2."; // не выполнится
else
print "Message 3."; // будет напечатано это сообщение 
print "Age: $age. Shoe Size: $shoe_size";  // будет напечатано это сообщение где выведет Age:12, Shoe_size:13, как оказалось оператор elseif отработал на увеличение shoe_size и будет равен 14

/*
Воспользуйтесь конструкцией цикла while(), чтобы вывести на экран величины температур
в пределах от -50 до 50 градусов по Фаренгейту и эквивалентные им величины температур
в градусах Цельсия. По температурной шкале Фаренгейта вода замерзает при температуре 23
градуса и закипает при 212 градусах. А по температурной шкале Цельсия вода замерзает при
температуре 0 градусов и закипает при 100 градусах. Таким образом, для преобразования
температуры по Фаренгейту в температуру по Цельсию следует вычесть из ее величины 32,
умножить полученную разность на 5 и разделить на 9. А для преобразования температуры
по Цельсию в температуру по Фаренгейту следует умножить ее величину на 9, разделить
полученный результат на 5 и прибавить 32.
*/

//$f= -50;
//while ($f <= 50)  {
//print  'Температура по фаренгейту '. $f;
//print "    ";
//print 'Температура по цельсию '. $c=(($f-32)*5)/9;
//print "\n";

//$f++;
//}

print 'Видоизмените выполнение задания в упражнении 3, воспользовавшись конструкцией цикла
for() вместо конструкции цикла while().';
for ($f=-50;$f<=50;$f++) {
print  'Температура по фаренгейту '. $f;
print "    ";
print 'Температура по цельсию '. $c=(($f-32)*5)/9;
print "\n";


}



?>
