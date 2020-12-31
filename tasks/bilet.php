<?php
$num = 999999; 
    function luckyTickets($num){

	    $count=0;
	
    		for($i=0;$i<=$num;$i++){
        	 $str =(string)$i;
                 $str=str_pad($str,strlen($num),"0",STR_PAD_LEFT); 
     	 	$arr = $str;
	//	echo ceil(count($arr)/2);
		$arr2=array_slice($arr,0,ceil(count($arr)/2));
		$arr3=array_slice($arr,ceil(count($arr)/2)); 
	       echo $oneArray=int(array_sum($arr2));
	echo 	$twoArray=int(array_sum($arr3));
       			 if($oneArray == $twoArray){
        			$count++;
	echo 'Билет номер: '. $str.'<br>';
		 }
         } 
	echo 'Количество счаcтливых билетов :'.$count; 




}

echo luckyTickets($num);
echo "<br>";
/*
$arr2=[1,2,3,3,2,1];
//var_dump(array_chunk($arr2,3,TRUE));
//echo array_sum($arr2);
echo "<br>";
foreach ($arr2 as $k => $v) {
	echo $k .'=>'. $v;
	echo '<br>';

}

$result=array_slice($arr2,2);
//var_dump($result);
echo "<br>";
//var_dump($arr2);


$books = array("a", "b", "c", "d", "e","f"); // assuming books is an array like this
    $count = count($books); // total count of the array books
    $half = $count/2; // half of the total count
    $books1 = array_slice($books, 0, $half);      // returns first half
    $books2 = array_slice($books, $half);  // returns second half

//    print_r($books1);
	echo "<br>";
 //   print_r($books2);

	$arr=[0,1,2,0,2,1];
var_dump($arr2=array_slice($arr,0,count($arr)/2));
	echo "<br>";
var_dump($arr3=array_slice($arr,count($arr)/2));
echo "<br>";
echo array_sum($arr2);
echo "<br>";
echo array_sum($arr3);
echo array_sum($arr2)!==array_sum($arr3);
