<?php

//Спросите у пользователя имя, возраст, а также попросите его ввести сообщение (его сделайте в textarea). Выведите эти данные на экран в формате, приведенном под данной задачей. Позаботьтесь о том, чтобы пользователь не мог вводить теги (просто удаляйте их) и таким образом сломать сайт

if (isset($_REQUEST['submit'])) {
     $name=strip_tags($_REQUEST['name']);
     $age=strip_tags($_REQUEST['age']);
     $text=strip_tags($_REQUEST['test']);
     echo 'Привет, '.$name.','. $age.' лет.';
     print "\n";
     echo 'Твое сообщение:', $text; 

}

?>


<form action="" method="POST">
			<input type="text" name="name" placeholder="Введите имя"> <br><br>
			<input type="text" name="age" placeholder="Введите возраст"> <br><br>
			<textarea name="test" placeholder="Введите сообщение"></textarea>
			<input type="submit" name="submit">
		</form>

