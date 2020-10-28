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
	$loginInFile='admin';
 	$passwordInFile='12345';
   
     if(!empty($_REQUEST['login']) and
        !empty($_REQUEST['password']) and 
        !empty($_REQUEST['password2'])
        ) {
        
        if(loginTrue($_REQUEST['login']) {
        
        }
        
        
        
        $password=trim($_REQUEST['password']);
        $password2=trim($_REQUEST['password2']);                       
        
        
        
        
         
        
        
        
   }
  
  public function loginTrue($str) {
   if($login=trim($_REQUEST['login']==0) or
           $login=strlen(trim($_REQUEST['login']>3)) or
           $login=strlen(trim($_REQUEST['login']<12))
        
         ) {
        echo 'Введите правильный логин';
        
        }else 
        {
          return $login;        
        }
  
  
  }
  
   		
?>
<form action="" method="POST">
	<input type="text" name="login" placeholder="login" ><br><br>
	<input type="password" name="password" placeholder="pass"><br><br>
	<input type="password" name="password2" placeholder="подтвердите пароль"><br><br>
	<input type="submit" name="submit">
</form>



