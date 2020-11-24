<?php
//Имена в алфавитном порядке в порядке убывания
//возраст в порядке возрастания

$spisok = array(
   'roz1' => array('id'=>'1', 'age'=>'19', 'gender'=>'m', 'login'=>'Kos'),
   'roz2' => array('id'=>'2', 'age'=>'12', 'gender'=>'m', 'login'=>'Oleg'),
   'roz3' => array('id'=>'3', 'age'=>'17', 'gender'=>'g', 'login'=>'Sasha'),
   'roz4' => array('id'=>'4', 'age'=>'14', 'gender'=>'m', 'login'=>'Roma'),
   'roz5' => array('id'=>'5', 'age'=>'15', 'gender'=>'g', 'login'=>'Galina'),
   'roz6' => array('id'=>'6', 'age'=>'16', 'gender'=>'g', 'login'=>'Nadi'),
   'roz7' => array('id'=>'7', 'age'=>'13', 'gender'=>'g', 'login'=>'Evgenia'),
   'roz8' => array('id'=>'8', 'age'=>'18', 'gender'=>'m', 'login'=>'Sveta'),
   'roz9' => array('id'=>'9', 'age'=>'11', 'gender'=>'g', 'login'=>'Julia'));


function cmp2($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

//var_dump($spisok);
//usort($spisok, "cpm");
//var_dump($spisok);


//фильтр usort фильтрует возраст в порядке возрастания
usort($spisok, function($a, $b){
return ($a['age'] - $b['age']);});
//var_dump($spisok);


function cmp($a, $b)
{
    return strcmp($a["login"], $b["login"]);
}
usort($spisok, "cmp");
var_dump($spisok);


$arr=['Kos','Oleg','Sasha','Roma','Galina','Nadi','Evgenia','Sveta','Julia'];
sort($arr);
//var_dump($arr);

