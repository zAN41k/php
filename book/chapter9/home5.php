<?php
/*
Видоизмените программу из предыдущего упражнения, чтобы она отображала только файлы
с расширением .html. Ведь разрешать пользователям просматривать исходный код РНР лю-
бой страницы веб-сайта опасно, если она содержит уязвимую информацию (например, имена
пользователей и их пароли).
*/
?>

<?php 
if(!isset($_REQUEST['submit']))  {
?> 
<?php
}
?>


<?php
if(isset($_REQUEST['submit'])) {
       
     if($form_errors=validate_form()){
	show_form($form_errors);
     }
      else{
	process_form();
        } 
   }  else{
    	show_form();
}



function show_form($errors = array()) {
 if ($errors) {
        print '<th> Please correct these errors: <ul><li></th>' ;
        print implode('</li><li>', $errors);
        print '</li></ul>';
    }
   print<<<_HTML_
<form action="" method="POST">
        <input type="text" name="name" placeholder="Введите файл: "><br>
        <input type="submit" name="submit">
      </form> 

_HTML_;
}




function process_form(){
          $name=trim($_REQUEST['name']);
         }



function validate_form(){
     	$errors=[];
//проверка на существование файла , доступен для чтения и находится в корне каталога
 	$name=trim($_REQUEST['name']);   

       if (!file_exists($_SERVER['DOCUMENT_ROOT'].'/'.$_REQUEST['name'])) {
                  $errors[]= 'Такого файла нет:';
          
	}
	
	 if (file_exists($_SERVER['DOCUMENT_ROOT'].'/'.$_REQUEST['name'])) {
//                    echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/'.$_REQUEST['name']);
  
          }

	
	if (!is_readable($_SERVER['DOCUMENT_ROOT'].'/'.$_REQUEST['name'])) {
		$errors[]= "Нет прав на чтение";
		}

        $arr=explode('.',$_REQUEST['name']);
	$correct=$arr[1];
	$str='html';
       if($str!==$correct) {
		$errors[]='Обрабатываются только HTML файлы : ';
	}else {
	echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/'.$_REQUEST['name']);
}

   return $errors;
}

