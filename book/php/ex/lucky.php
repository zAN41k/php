<?php



$number=8;
$count=0;
$arr=[];
$dlina=str_repeat(9,$number);
$half=strlen($dlina)/2;

for($i=0;$i<$dlina+1;$i++) {
    $str =(string)$i;
    $str=str_pad($str,strlen($dlina),"0",STR_PAD_LEFT);
        if(strlen($str)%2==0) {

        $arr=str_split($str,1);

            $num1 = array_slice($arr, 0, $half);      // returns first half
            $num2 = array_slice($arr, $half);  // returns second half
            $one=array_sum($num1);
            $two=array_sum($num2);
            if($one==$two) {

               $count++;
               echo ' '.$str;
            }

        }

}

echo ' Всего счастливых билетов ' , $count;

