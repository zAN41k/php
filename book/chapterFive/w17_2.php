<?php
////Сделайте функцию getDivisors, которая параметром принимает число и возвращает массив его делителей     (чисел, на которое делится данное число).



function getDivisors($num) {
for($i=1;$i<=$num;$i++) {
          if($num%$i==0) {
          $arr[]=$i;
           }
      }return $arr;
}

//var_dump(getDivisors(55));

//Сделайте функцию getCommonDivisors, которая параметром принимает 2 числа, а возвращает массив их общих делителей. Для этого используйте вспомогательную функцию getDivisors из предыдущей задачи.

function getCommonDivisors($i,$j) {
         $res=array_intersect(getDivisors($i),getDivisors($j));
          
    return $res;      
} 


var_dump(getCommonDivisors(51,99));



?>

