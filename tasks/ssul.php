<?php

$a=10;
$b=&$a;

$a=20;
echo $b;
unset($a);
