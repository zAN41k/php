<?php
/*
Напишите функцию process_form(), выводящую на экран все параметры переданной на
обработку формы и их значения. Можете допустить, что параметры формы имеют только
скалярные значения.
*/
if(isset($_REQUEST['submit'])) {
 //	$one=trim(strip_tags($_REQUEST['one']));
//	$two=trim(strip_tags($_REQUEST['two']));
//	$three=trim(strip_tags($_REQUEST['three']));
                process_form();
}   else {
		show_form();
} 

function process_form(){
   print 'Первое число: '.$_REQUEST['one'].' '.' Второе число: '.$_REQUEST['two'].' Третье число: '.$_REQUEST['three'];

}

function show_form() {
print<<<_HTML_
<form action="" method="POST">
      <input type="text" name="one" placeholder="Введите число"><br>
      <input type="text" name="two" placeholder="Введите число"><br>
      <input type="text" name="three" placeholder="Введите число"><br>
      <input type="submit" name="submit">
      </form> 

_HTML_;
}



