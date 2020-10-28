<form action="" method="GET">
           <input type="text" name="name" placeholder="Введите имя">
           <input type="text" name="age" placeholder="Введите возраст">
           <textarea name="message"> </textarea>  
           <input type="submit" name="submit">
 </form>

<?php
/*Спросите у пользователя имя, возраст, а также попросите его ввести сообщение (его сделайте в textarea). Выведите эти данные на экран в формате, приведенном под данной задачей. Позаботьтесь о том, чтобы пользователь не мог вводить теги (просто удаляйте их) и таким образом сломать сайт.
*/
   if(isset($_REQUEST['submit'])) {
   $age= strip_tags($_REQUEST['age']);
   $name= strip_tags($_REQUEST['name']);
   $message = strip_tags($_REQUEST['message']);
  
   echo "Привет, $name, $age лет. <br> Твое сообщение: $message";



    }
  
       

?>




