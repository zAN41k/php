<?php
/*Напишите функцию, возвращающую дескриптор <img /> разметки HTML-страницы. Эта
функция должна принимать URL изображения в качестве обязательного аргумента, а так-
же текст надписи, ширину и высоту изображения в качестве необязательных аргументов alt,
height и width соответственно.
*/


function img($url,$alt='Simle txt',$width='500px',$height='600px') {
 
<img src="$url" alt=$alt style=width:$width;height:$height>
 
}  

echo img(exaple.com);




?>

