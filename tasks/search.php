<?php

$array=[-25,-5,2,4,8,6,9,100];

$search=99;

function searchInArray(array $array, int $search,int $start = 0, int $end = null) {
  
  if($end===null) {
    $end = count($array)-1;
  }

  if($start > $end) {
    return false;
  }
  
  $halfIndex = (int)(($start + $end)/2);
  if($array[$halfIndex]!==$search){
    if($array[$halfIndex]<$search) {
    $start=$halfIndex +1;
  }else {
    $end = $halfIndex - 1; 
  }
  return searchInArray($array,$search,$start,$end);

       }
  return true;
}


var_dump(searchInarray($array,$search));


