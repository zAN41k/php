<form action="" method="POST">
<input type="text" name="age" placeholder="ВВедите возраст" value="<?php if(!empty($_REQUEST['age'])) echo $_REQUEST['age'];    ?>">
<input type="submit" name="submit" value="SEND">
</form>



<?php
error_reporting(E_ALL);
/*
Спросите возраст пользователя с помощью формы. Результат
запишите в переменую $age. Сделайте так, чтобы после отправки
формы значения ее полей не пропадали.
*/
      $age=trim(strip_tags($_REQUEST['age']));
      echo $age;

?>

