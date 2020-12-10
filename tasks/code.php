<?php



function expressionMatter($a, $b, $c) {
  // your code here
  $num[]=$a*($b+$c);
  $num[]=$a*$b*$c;
  $num[]=$a+$b*$c;
  $num[]=($a+$b)*$c;
	var_dump($num);
  return max($num);
}

//echo expressionMatter(9,1,1);



function solution($str) {
	if($str==' ' OR $str== "") {
	$arr=[];
	var_dump($arr);
	}else {

  $arr=str_split($str,2);
	
  for($i=0;$n=strlen($str),$i<$n/2;$i++) {
        
    if(strlen($arr[$i])!=2 and $arr[$i]!==' '){ 
     $arr[$i].='_';
    
       }
	}
	var_dump($arr);
    }
  return $arr;
}

solution(' ');
