<?php

 $num = 99; 
    function luckyTickets($num){

	    $count=0;
	if(strlen($num)==2) {
    		for($i=0;$i<=$num;$i++){
        	 $str =(string)$i;
                 $str=str_pad($str,strlen($num),"0",STR_PAD_LEFT); 
     	 	$arr = $str;
       			 if($arr[0]== $arr[1]){
        			$count++;
	 echo 'Билет номер: '. $str.'<br>';
		 }
         } 
	echo 'Количество счаcтливых билетов :'.$count; 
}
}


luckyTickets($num);
