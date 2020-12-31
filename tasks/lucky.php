<?php

$num = 999999; 
 
    function luckyTickets($num){
   	 $count=0;
   	 for($i=0;$i<=$num;$i++){
       		  $str =(string)$i;                 
                  $str=str_pad($str,strlen($num),"0",STR_PAD_LEFT);  
                } 

	          $arr = $str;
       	 if($arr[0]+$arr[1]+$arr[2] == $arr[3]+$arr[4]+$arr[5]){
       	 $count++;
	 echo 'Билет номер: '. $str.'<br>';
		 }
   
 
echo 'Количество счастливых билетов :'.$count;
 
}
 
echo luckyTickets($num);

