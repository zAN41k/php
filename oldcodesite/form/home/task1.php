<?php
//Спросите город пользователя с помощью формы. Результат запишите в переменную $city. Выведите на экран фразу 'Ваш город: %Город%'.
// если форма была отправлена и город не пустой

if(!empty($_REQUEST['city'])) {
	$city=strip_tags($_REQUEST['city']);
        echo 'Ваш город:' .$city;
	
}




?>



<form action="" method="POST">
	<input type="text" name="city">
	<input type="submit">
</form>
