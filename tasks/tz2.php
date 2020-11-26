<?php



$num = 999999; 
 
    function luckyTickets($num){
    $count=0;
    for($i=0;$i<=$num;$i++){
         $str =(string)$i;
	//	if(strlen($str)<6){
	//	for($j=strlen($str);$j<6;$j++){  
                 $str=str_pad($str,6,"0",STR_PAD_LEFT); 
//	}
//}
     $arr = $str;
        if($arr[0]+$arr[1]+$arr[2] == $arr[3]+$arr[4]+$arr[5]){
        $count++;
	 echo 'Билет номер: '. $str.'<br>';
		 }
   }
 
echo 'Количество счаcтливых билетов :'.$count;
 
}
 
echo luckyTickets($num);

//$str=12;
//echo str_pad($str,6,"0",STR_PAD_LEFT);
//доработать


