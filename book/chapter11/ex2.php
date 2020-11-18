<?php
$c = curl_init('http://numbersapi.com/09/27');
// Дать расширению cURL команду возвратить содержимое ответа
// в виде символьной строки, а не вывести его сразу на экран
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
// Выполнить запрос
  $fact = curl_exec($c);
?>
Did you know that <?= $fact ?>
