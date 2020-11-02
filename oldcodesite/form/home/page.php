<meta charset="utf-8">

 
<?php
/*
Отправьте GET-запрос на показ определенной страницы и раздела
сайта. Запишите адрес страницы в переменную $page, а раздел в
переменную $topic. С помощью функции include() сделайте так,
чтобы к странице index.php подключалась определенная страница
($page) из определенной папки ($topic). Создайте 3 папки и 2 файла
в каждой папке с различными названиями и с их помощью проверьте
работу скрипта.
*/
//include $_SERVER['DOCUMENT_ROOT'].'/'.'topic'.'/'.'1.php';
//include $_SERVER['DOCUMENT_ROOT'].'/'.'topic'.'/'.'2.php';



$page = $_REQUEST['page'];
$topic = $_REQUEST['topic'];
include $topic.'/'.$page.'.php';


?>

<a href="page.php?topic=topic&page=1">ссылка на файл 1.php в папке "topic"</a><br>
<a href="page.php?topic=topic&page=2">ссылка на файл 2.php в папке "topic"</a><br>
<a href="page.php?topic=topi&page=3">ссылка на файл 3.php в папке "topi"</a><br>
<a href="page.php?topic=topi&page=4">ссылка на файл 4.php в папке "topi"</a><br>




