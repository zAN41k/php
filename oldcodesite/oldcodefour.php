<?php
//Задача. Если переменная $a равна 10, то выведите 'Верно', иначе выведите 'Неверно'.
$a=10; 
if($a=10) echo 'Верно'; else 'Неверно';

//В переменной $min лежит число от 0 до 59. Определите в какую четверть часа попадает это число (в первую, вторую, третью или четвертую).
print "\n";
$min=45;
if($min>0 and $min<15) echo 'Переменная в первой четверти';
if($min>=15 and $min<30) echo 'Переменная во второй четверти';
if($min>=30 and $min<45) echo 'Переменная в третьей четверти';
if($min>=45 and $min<=59) echo 'Переменная в четвертой четверти';
if($min<=0 or $min>60 ) echo 'Че ты вводишь ушлепок?';

// Переменная $lang может принимать два значения: 'ru' и 'en'. Если она имеет значение 'ru', то в переменную $arr запишем массив дней недели на русском языке, а если имеет значение 'en' – то на английском. Решите задачу через 2 if, через switch-case и через многомерный массив без ифов и switch.

print "\n";

$lang='en';

if($lang=='ru') {
    $arr= ['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье'];
    }
if($lang=='en') {
   $arr=['Monday','Tuesday','Wednesday','Thuersday','Friday','Saturday','Sunday'];
    }

var_dump($arr);
print "\n";

//решение кейсом

$lang = 'ru';
	
	switch ($lang) {
		case 'ru':
			$arr = ['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье'];
		break;
		case 'en':
			$arr = ['Monday','Tuesday','Wednesday','Thuersday','Friday','Saturday','Sunday'];
		break;
              
	}

	var_dump($arr);
print "\n";

//решение через многомерный массив
$lang = 'en';
	
	$arr = [
		'ru'=>['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье'],
		'en'=>['Monday','Tuesday','Wednesday','Thuersday','Friday','Saturday','Sunday'],
	];

	var_dump($arr[$lang]);
print "\n";

// Если переменная $a равна нулю, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 1, 0, -3.
$a=-3;

if($a==0) echo 'Верно'; else 'Неверно';
if($a==1) echo 'Проверка скрипта на ' , $a;
if($a==-3) echo 'Проверка скрипта на ' , $a;
 
print "\n";

//Если переменная $a больше нуля, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 1, 0, -3.

$a=-3;
if($a>0) echo 'Верно'; else echo 'Неверно';
print "\n";

//Если переменная $a больше или равна нулю, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 1, 0, -3.
$a=-3;

if($a>=0) echo 'Верно'; else echo 'Неверное';
print "\n";

//Если переменная $a меньше или равна нулю, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 1, 0, -3.
$a=-3;
if($a<=0) echo 'Верно'; else echo 'Неверно';
print "\n";

// Если переменная $a не равна нулю, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 1, 0, -3.
$a=1;
if($a!=0) echo 'Верно'; else echo 'Неверно';
print "\n";

//Если переменная $a равна 'test', то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 'test', 'тест', 3.
$a='test';
if($a=='test') echo 'Верно'; else echo 'Неверно';
print "\n";
//Если переменная $a равна '1' и по значению и по типу, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном '1', 1, 3.
$a=1;
if($a==='1') echo 'Верно'; else echo 'Неверно';
print "\n";

print 'Работа с empty и isset';
print "\n";

//Если переменная $a пустая, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 1, 3, -3, 0, null, true, '', '0'.
$a=0;

if(empty($a)) echo 'Верно'; else echo 'неверно';
print "\n";
//Если переменная $a НЕ пустая, то выведите 'Верно', иначе выведите 'Неверно'.

$a='';
if(!empty($a)) echo 'Переменная не пустая'; else echo 'Переменная пустая';
print "\n";
 
//Если переменная $a существует, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 3 и null.
$a='3';
if(isset($b)) echo 'Переменная существует' ; else echo 'Переменная не существует';
print "\n";

//Если переменная $a НЕ существует, то выведите 'Верно', иначе выведите 'Неверно'.

$c='';
if(!isset($c)) echo 'Верно переменная не существует'; else echo 'Переменная существует ;)';
print "\n";

print 'Работа с логическими переменными';
print "\n";
//Если переменная $var равна true, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $var, равном true, false. Напишите два варианта скрипта - с короткой записью и с длинной.

$var=true;
if($var==true) echo 'Переменная равно true короткая запись'; else echo 'Переменная не тру брат короткая запись';

print "\n";

$var=false;
if($var==false) {
echo 'Переменная не тру длинная запись';
}else { echo 'Переменная тру длинная запись';
}

print "\n";

//Если переменная $var НЕ равна true, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $var, равном true, false. Напишите два варианта скрипта - с короткой записью и с длинной.

$var=false;
 if(!$var==true) echo 'Переменная не равна true короткая запись'; else echo 'Переменная не тру брат короткая запись';
 
 print "\n";
 
 $var=true;
 if(!$var==false) {
 echo 'Переменная не тру длинная запись';
 }else { echo 'Переменная тру длинная запись';
 }
 
 print "\n";

print 'Работа с OR и AND';
print "\n";
//Если переменная $a больше нуля и меньше 5-ти, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 5, 0, -3, 2.
$a =2;
if($a>0 and $a<5) echo 'Верно переменная в диапазоне от 1 до 4 ', $a; else echo 'Неверно!Переменная не в диапазоне от 1 до 4';
print "\n";

//Если переменная $a равна нулю или равна двум, то прибавьте к ней 7, иначе поделите ее на 10. Выведите новое значение переменной на экран. Проверьте работу скрипта при $a, равном 5, 0, -3, 2.
$a=0;
if($a==0 or $a==2) {
    $a+=7;
    echo $a;
}else {
   $a/=10;
   echo $a;
}
print "\n";

//Если переменная $a равна или меньше 1, а переменная $b больше или равна 3, то выведите сумму этих переменных, иначе выведите их разность (результат вычитания). Проверьте работу скрипта при $a и $b, равном 1 и 3, 0 и 6, 3 и 5.
$a=3;
$b=5;
if($a<=1 and $b>=3) {
   echo 'a+b=', $a+=$b;
  }else{
  echo 'a-b=', $a-=$b;
}
print "\n";

// Если переменная $a больше 2-х и меньше 11-ти, или переменная $b больше или равна 6-ти и меньше 14-ти, то выведите 'Верно', в противном случае выведите 'Неверно'.
$a=1;
$b=15;
if(($a>2 and $a<11) or ($b>=6 and $b<14)) echo 'Верно переменная в диапазоне '; else echo 'Неверно';
print "\n";


print 'На switch-case';
print "\n";
//Переменная $num может принимать одно из значений: 1, 2, 3 или 4. Если она имеет значение '1', то в переменную $result запишем 'зима', если имеет значение '2' – 'лето' и так далее. Решите задачу через switch-case.

$num = 4;
  
          switch ($num) {
                  case 1:
                          $result = 'Зима';
                  break;
                  case 2:
                          $result ='Лето';
                 break;
                  case 3:
                          $result='Осень';
                 break;
                 case 4: 
                          $result='Весна';
                 break;
         }
      echo 'Сейчас ' , $result;
print "\n";

print 'Задачи';
print "\n";
// В переменной $day лежит какое-то число из интервала от 1 до 31. Определите в какую декаду месяца попадает это число (в первую, вторую или третью).
$day=31;
if($day>=1 and $day<=11) echo 'Число лежит в первой декаде ';
if($day>11 and $day<=21) echo 'Число лежит во второй декаде ';
if($day>21 and $day<=31) echo 'Число лежит в третьей декаде ';

print "\n";

//В переменной $month лежит какое-то число из интервала от 1 до 12. Определите в какую пору года попадает этот месяц (зима, лето, весна, осень).
$month=12;
if($month>=1 and $month<4) echo 'Зима';
if($month>=4 and $month<7) echo 'Весна';
if($month>=7 and $month<10) echo 'Лето';
if($month>=10 and $month<=12) echo 'Осень';
print "\n";

//В переменной $year хранится год. Определите, является ли он високосным (в таком году есть 29 февраля). Год будет високосным в двух случаях: либо он делится на 4, но при этом не делится на 100, либо делится на 400. Так, годы 1700, 1800 и 1900 не являются високосными, так как они делятся на 100 и не делятся на 400. Годы 1600 и 2000 - високосные, так как они делятся на 400.

$year=2000;
if($year%4==0 and $year%100!==0)  echo 'Год высокосный', $year;
if($year%400==0)  echo 'Год высокосный ', $year;
else echo 'Год не высокосный ' , $year;

print "\n";


//Дана строка с символами, например, 'abcde'. Проверьте, что первым символом этой строки является буква 'a'. Если это так - выведите 'да', в противном случае выведите 'нет'.
$a='abcde';
if($a[0]=='a') echo 'Yes'; else echo 'NO!';

print "\n";

//Дана строка с цифрами, например, '12345'. Проверьте, что первым символом этой строки является цифра 1, 2 или 3. Если это так - выведите 'да', в противном случае выведите 'нет'.
$str='12345';
if($str[0]=='1' or $str[1]=='2' or $str[2]=='3') echo 'Да первые числа 1,2,3  '; else echo 'NO!';

print "\n";

// Дана строка из 3-х цифр. Найдите сумму этих цифр. То есть сложите как числа первый символ строки, второй и третий.
$str='123';
$sum=$str[0]+$str[1]+$str[2];
echo $sum;

print "\n";

//Дана строка из 6-ти цифр. Проверьте, что сумма первых трех цифр равняется сумме вторых трех цифр. Если это так - выведите 'да', в противном случае выведите 'нет'.
$str='123322';
if(($str[0]+$str[1]+$str[2])==($str[3]+$str[4]+$str[5])) echo 'Сумма первых трех чисел и последних трех равно =', $str; else echo 'Сумма не равна ', $str;


print "\n";


?>