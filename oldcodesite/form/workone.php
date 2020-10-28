<form action="" method="GET">
	<input type="text" name="name" >
	<input type="text" name="fio">
	<textarea name="message"> </textarea>
	<input type="submit" name="submit">
</form>


<?php
/*
Спросите у пользователя имя, фамилию, автобиографию (textarea).
Выведите эти данные на экран в формате, приведенном под данной
задачей. Позаботьтесь о том, чтобы пользователь не мог вводить теги
и таким образом сломать сайт.
*/
         if(isset($_REQUEST['submit'])) {
         $name = strip_tags($_REQUEST['name']);
         $fio  =strip_tags($_REQUEST['fio']);
         $message=strip_tags($_REQUEST['message']);
         
         echo "Привет, $name, $fio лет. <br> Твое сообщение: $message";

         
         
         
         
         }



?>
