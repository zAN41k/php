<?php
/*
Создайте вне интерпретатора РНР новый HTML-файл шаблона по образцу, приведенному в
примере 9.1. Напишите программу, в которой функции file_get_contents() и file_put
_contents() применяются для чтения HTML-файла шаблона, вместо переменных в шаблон
подставляются соответствующие значения, а новая страница сохраняется в отдельном файле.
создал файл dz.txt
*/
//загрузка файла шаблона 

$page = file_get_contents('dz.txt');
$page = str_replace('page_title', 'Welcome', $page);

if(date('H'>=12)) {
    $page = str_replace('{color}','blue', $page);
}else {
    $page = str_replace('{color}','green', $page);
}
$page = str_replace('{name}',$_SESSION['username'], $page);
file_put_contents('page.html', $page);



?>
