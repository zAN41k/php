<?php
$num = 999999;
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


    if(strlen($num)==4) {
        for($i=0;$i<=$num;$i++){
            $str =(string)$i;
            $str=str_pad($str,strlen($num),"0",STR_PAD_LEFT);
            $arr = $str;
            if($arr[0]+$arr[1] == $arr[2]+$arr[3]){
                $count++;
                echo 'Билет номер: '. $str.'<br>';
            }
        }
        echo 'Количество счаcтливых билетов :'.$count;
    }

    if(strlen($num)==6) {
        for($i=0;$i<=$num;$i++){
            $str =(string)$i;
            $str=str_pad($str,strlen($num),"0",STR_PAD_LEFT);
            $arr = $str;
            if($arr[0]+$arr[1]+$arr[2] == $arr[3]+$arr[4]+$arr[5]){
                $count++;
                echo 'Билет номер: '. $str.'<br>';
            }
        }
        echo 'Количество счаcтливых билетов :'.$count;
    }
    if(strlen($num)!==2 AND strlen($num)!==4 AND strlen($num)!==6) echo 'Число цифр в билете должно быть равно 2 , 4 или 6 :) ';
}

echo luckyTickets($num);
