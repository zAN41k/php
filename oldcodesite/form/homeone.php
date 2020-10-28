<form action="" method="GET">
	<input type="text" name="name" placeholder="Введите имя">
	<input type="submit">
</form>
<?php
//Спросите имя пользователя с помощью формы. Результат запишите в переменную $name. Выведите на экран фразу 'Привет, %Имя%'

    if(isset($_REQUEST['name'])) {
	$name=($_REQUEST['name']);
	echo 'Привет, ' .$name;
	}





?>


