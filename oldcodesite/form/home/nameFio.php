<form action="" method="POST">
<input type="text" name="name" placeholder="name" placeholder="ИМЯ"><br>
<input type="text" name="fio" placeholder="fio" placeholder="ФИО"><br>
<textarea name="message" > </textarea><br>
<input type="submit" name="submit"><br>
</form>


<?php
/*Спросите у пользователя имя, фамилию, автобиографию (textarea).
Выведите эти данные на экран в формате, приведенном под данной
задачей. Позаботьтесь о том, чтобы пользователь не мог вводить теги
и таким образом сломать сайт.
*/
      if (isset($_REQUEST['submit'])) {
		$name=trim(strip_tags($_REQUEST['name']));
		$fio=trim(strip_tags($_REQUEST['fio']));
		$message=trim(strip_tags($_REQUEST['message']));

                echo $name .' '.$fio; 
		print "\n";
		print "\n";
		echo 'Родился ' . $message;


}


?>
