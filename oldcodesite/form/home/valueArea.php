<form action="" method="POST">
<input type="text" name="age" placeholder="Введите возраст" value="<?php if(!empty($_REQUEST['age'])) echo $_REQUEST['age'];    ?>"><br><br>
<textarea name="area" placeholder="Введите сообщение: "> <?php if(!empty($_REQUEST['area'])) echo $_REQUEST['area']; ?> </textarea><br><br>
<input type="submit" name="submit" value="SEND">
</form>



<?php
error_reporting(E_ALL);
/*
Спросите у пользователя имя, а также попросите его ввести
сообщение (textarea). Сделайте так, чтобы после отправки формы
значения ее полей не пропадали.
*/
      $age=trim(strip_tags($_REQUEST['age']));
      $area=trim(strip_tags($_REQUEST['area']));
      echo $age .' '. $area;

?>

