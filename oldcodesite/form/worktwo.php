<form action="" method="GET">
	<input type="text" name="day" placeholder="Введите день" ><br><br>
	<input type="text" name="mes" placeholder="Введите месяц"><br><br>
	<input type="text" name="god" placeholder="Введите год">
	<input type="submit" name="submit">
</form>


<?php
//var_dump($_REQUEST);

//Сделайте 3 поля ввода, в которые вводятся день, месяц и год.
//Выведите на дату в формате '2013-12-31'.

if(isset($_REQUEST['submit'])) {
         $day = strip_tags($_REQUEST['day']);
         $mes  =strip_tags($_REQUEST['mes']);
         $god  =strip_tags($_REQUEST['god']);
         
         echo $god.'-'.$mes.'-'.$day;
         
         
         
         
         }



?>

