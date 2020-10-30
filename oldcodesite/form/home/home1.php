<?php

//Спросите имя пользователя с помощью формы. Результат запишите в переменную $name. Выведите на экран фразу 'Привет, %Имя%'
if (isset($_REQUEST['name'])) {
	$name=trim($_REQUEST['name']);
        echo 'Привет, ' .$name;

}


?>

<form action="" method="POST">
			<input type="text" name="name">
			<input type="submit">
		</form>
