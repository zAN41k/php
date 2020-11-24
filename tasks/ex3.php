<?php

//первый индекс будет 0, значение true
//второй индекс будет 1 значение false
//третье значение будет null выведет систему в которой написан код и PHP_VERSION
$array = array(FALSE => TRUE, TRUE => FALSE, NULL => array(PHP_OS, "PHP_VERSION"));
//var_dump($array);
//$array[]=['NULL'=>array("Jeanne d\'Arc")];
array_push($array[null],"Jeanne d\'Arc");
//var_dump($array);
//echo '<pre>';
//print_r($array);
//echo '</pre>';
//echo json_encode($array);
var_export($array);
foreach($array as $k=>$v){
//	echo $k.'=>'.$v;
	print "\n";
}

