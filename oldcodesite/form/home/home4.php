<form action="" method="POST">
<input type="text" name="login" placeholder="login">
<input type="password" name="password" placeholder="pass">
<input type="submit" name="submit">
</form>




<?php
      if(isset($_REQUEST['submit']))  {
     $loginFile='admin';
     $passFile=12345;
        $login=trim(strip_tags($_REQUEST['login']));
       $password=trim(strip_tags($_REQUEST['password']));
                
           if($loginFile==$login and $passFile==$password) {
               echo 'Авторизация успешная';
        	}else{
             echo  'Повторите попытку';
	    }

              


}



?>
