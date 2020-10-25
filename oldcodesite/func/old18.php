<?php
//Сделайте функцию, которая принимает строку на русском языке, а возвращает ее транслит

function mainFun(?string $str) {
	$arr=[];
        $arr=splitStr($str);
        $arr2=trans($arr);
        $str=strAgain($arr2);
      return  $str; 
}

echo mainFun('abvgde');

function splitStr(?string $str) {
	$arr=str_split($str,1);

        return $arr;
}


// создаем функцию которая переберет заданный массив и выдаст транслит на английском

function trans(array $arr){
     $res=[];
     for($i=0,$num=count($arr);$i<=$num;$i++) {
	switch ($arr[$i]) {
		case 'a':
			$res[$i]= 'а';
		break;
		case 'b':
			$res[$i] = 'б';
		break;
		case 'v':
                         $res[$i] = 'в';
                 break;
                 case 'g':
                         $res[$i] = 'г';
                 break;
                case 'd':
                          $res[$i] = 'д';
                  break;
                  case 'e':
                          $res[$i] = 'е';
                  break;
          
    	} 
       
     } return $res;
 



} 
  
//создаем функцию которая переведет массив обратно в строку 

function strAgain(array $arr) {
	$str=implode('',$arr);		
     return $str;


} 
 

?>
