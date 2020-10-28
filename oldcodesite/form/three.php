<form action="" method="GET">
	<input type="text" name="one" placeholder="Введите число" ><br><br>
	<input type="text" name="two" placeholder="Введите число"><br><br>
	<input type="text" name="three" placeholder="Введите число"><br><br>
	<input type="text" name="four" placeholder="Введите число"><br><br>
	<input type="text" name="five" placeholder="Введите число"><br><br>
	<input type="submit" name="submit">
</form>



<?php
//Сделайте 5 полей ввода, в которые вводятся числа. Выведите на
//экран максимальное и минимальное из них.
if (isset($_REQUEST['submit'])) {
       $one = strip_tags($_REQUEST['one']);
       $two = strip_tags($_REQUEST['two']);
       $three = strip_tags($_REQUEST['three']);
       $four = strip_tags($_REQUEST['four']);
       $five = strip_tags($_REQUEST['five']);

       $arr=[$one,$two,$three,$four,$five];
       
       echo 'Максимальное число = ', max($arr);
       print "\n";
       echo 'Минимальное число = ', min($arr);
 }
                
?>
