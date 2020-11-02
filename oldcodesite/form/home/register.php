<form action="" method="POST">
<input type="text" name="login" placeholder="login"><br>
<input type="password" name="password" placeholder="password"><br>
<input type="password" name="password2" placeholder="repeat pass"><br>

<input type="submit" name="submit"><br>
</form>



<?php
/*
Реализуйте заготовку регистрации пользователя. Спросите у него
логин, пароль (в браузере должен быть звездочками) и
подтверждение пароля (тоже звездочками). Сравните пароль и его
подтверждение: если они не совпадают — выведите сообщение об
этом. Проверьте то, что пароль больше 5-ти символов и меньше 9-ти,
а логин больше 3-х и меньше 12-ти символов. Если все правильно —
выведите пользователю сообщение о том, что он успешно
зарегистрирован.

*/
	if (isset($_REQUEST['submit'])) {
		$login=trim(strip_tags($_REQUEST['login']));
		$password=trim(strip_tags($_REQUEST['password']));
		$repeat_pass=trim(strip_tags($_REQUEST['password2']));

                 if(validLogin($login) and validPass($password,$repeat_pass)){
			echo 'Авторизация прошла успешно!';
		} else {
			echo 'Повторите попытку';
	}
	
	
			}					

		
		function validLogin($str){
		if(strlen($str)>3 and strlen($str)<12) {
		return true;	
			}else {
			echo 'Логин должен быть 3х и меньше 12ти: ';
			return false;
		}
	}

                function validPass($str,$repeat){
			if((strlen($str)>5 and strlen($str)<9) and ($str==$repeat)){
			return true;
			}else {
			echo 'Пароли не совпадают, пароль должен быть больше 5ти и меньше 9: ';
			return false;	
			}
	}
               

			





?>
