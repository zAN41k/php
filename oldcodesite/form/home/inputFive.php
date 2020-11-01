 <form action="" method="POST">
   <input type="text" name="one" placeholder="Введите число"><br>
   <input type="text" name="two" placeholder="Введите число"><br>
   <input type="text" name="three" placeholder="Введите число"><br>
   <input type="text" name="four" placeholder="Введите число"><br>
   <input type="text" name="five" placeholder="Введите число"><br>
   <input type="submit" name="submit">
   </form>          


<?php
/*Сделайте 5 полей ввода, в которые вводятся числа. Выведите на
экран максимальное и минимальное из них.
*/
   if(isset($_REQUEST['submit'])) {
 	$one=trim(strip_tags($_REQUEST['one']));
	$two=trim(strip_tags($_REQUEST['two']));
	$three=trim(strip_tags($_REQUEST['three']));
	$four=trim(strip_tags($_REQUEST['four']));
	$five=trim(strip_tags($_REQUEST['five']));

	$arr=[$one,$two,$three,$four,$five];
	echo 'max NUMBER is: ', max($arr);
	print "\n";
	echo 'min NUMBER is: ', min($arr);




	


}

?>
