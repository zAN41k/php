<form action="" method="POST">
<input type="text" name="day" placeholder="День"><br>
<input type="text" name="mesac" placeholder="Месяц"><br>
<input type="text" name="god" placeholder="Год"><br>
<input type="submit" name="submit">
</form> 

<?php
/*Сделайте 3 поля ввода, в которые вводятся день, месяц и год.
Выведите на дату в формате '2013-12-31'.
*/    
   if(isset($_REQUEST['submit'])) {
	$day=trim(strip_tags($_REQUEST['day']));
	$mesac=trim(strip_tags($_REQUEST['mesac']));
	$god=trim(strip_tags($_REQUEST['god']));

	echo $god.'-'.$mesac.'-'.$day;


}


?>
