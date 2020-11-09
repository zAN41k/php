

<?php
$str='Alaska';

function yesNo($str){
$arr=['Montana','Alaska'];
foreach($arr as $v) {
  if($v==$str) {
	echo 'есть';
//	break;
        return true;
}else {
        echo 'нету';
       return false;
   }		

}

}
 
//yesNo($str);

$str='Mon';
function inArr($str) {
        $arr=[1,2,3,4,5,6,'Mon'];
  	if(in_array($str,$arr)) {
        return true; 
 } else {return false;}
}

var_dump(inArr($str));
?>
