<?php

/*Преобразовать $a="abradсabra" в "abracbra"(удалить символ "d" и третью букву "a").
*/

$a="abradсabra";
$a=str_replace('d','',$a);
echo $a;
