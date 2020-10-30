<?php
//Спросите возраст пользователя. Если форма была отправлена и введен возраст, то выведите его на экран, а форму уберите. Если же форма не была отправлена (это будет при первом заходе на страницу) - просто покажите ее

if(isset($_REQUEST['age'])) {
    $age=strip_tags($_REQUEST['age']);
    echo 'Ваш возраст: ' .$age;    
     }


?>
<?php 
if(!isset($_REQUEST['age']))  {
?> 
        <form action="" method="POST">
		<input type="text" name="age" placeholder="Введите возраст"> <br><br>
		<input type="submit" name="submit">
	</form>
<?php

     }

?>



