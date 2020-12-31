<?php

//$string = 'ave cezar';

$arr=str_split($string,1);

foreach($arr as $v) {
//echo $v;
//	echo "<br>";
	}
//функция сдвига массива на количество равное N
function shiftToRight(array $array, int $n) : array {

	$n = $n % count($array);
	$slice=array_splice($array,-$n);
	return array_merge($slice,$array);
	
}
$arr=shiftToRight($arr,3);



$alfavit=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
$keys=range(0,25);
//var_dump($keys);
$result = array_combine($keys,$alfavit);
//var_dump($result);
foreach($result as $k => $v) {
//	echo $k.'=>'.$v;
//	echo "<br>";

}

$shiftArr=shiftToRight($result,3);
foreach($shiftArr as $k => $v) {
          echo $k.'=>'.$v;
          echo "<br>";
  
  }
//ищу в массиве алфавита совпадение по букве и записываю его индекс в отдельный массив
$string = 'cezar';
$arrString=str_split($string,1);
$keyStr=[];
for($i=0;$num=count($arrString),$i<$num;$i++) {
 $keyStr[]=array_search($arrString[$i],$alfavit); 

}



var_dump($keyStr);
//комбинирую полученные ключи из алфавите с теми буквами которые получил, тем самым узнаю индекс по которому буду обращаться к новому
//массиву у которого сдвиг
$shifrCezar=array_combine($keyStr,$arrString);
echo "<br>";
foreach($shifrCezar as $k => $v) {
	echo $k .'=>'. $v;
	echo "<br>";

}

$newString=[];
for($i=0;$num=count($shiftArr)-1,$i<$num;$i++) {
	if(!empty($shiftCezar[$i]) AND $shiftCezar[$i] == $shiftArr[$i]) {
		$newString[]=$shiftCezar[$i];
	}
}





var_dump($newString);

