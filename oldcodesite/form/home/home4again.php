<form input action="" method="POST">
  <input type="text" name="login" placeholder="login" ><br>
  <input type="password" name="password" placeholder="password"><br>
  <input type="submit" name="submit"> <br>
<?php
   

 if(isset($_REQUEST['submit'])) {
	$passFile=12345;
	$loginFile='admin';
  
       $login=trim(strip_tags($_REQUEST['login']));
	$password=trim(strip_tags($_REQUEST['password']));


        if($loginFile==$login && $passFile==$password) {

		echo 'Авторизация успешна' ;
	}	else {
			echo 'Повторите попытку';
}
 
}





?>




