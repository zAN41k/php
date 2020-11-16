<?php
/*
Напишите на РНР программу, отображающую форму, в которой пользователю предлагает-
ся указать имя файла в корневом каталоге документов на вебсервере. Если такой файл су-
ществует на веб-сервере, доступен для чтения и находится в корневом каталоге докумен-
тов, то программа должна отобразить его содержимое. Так, если пользователь введет имя
файла article.html, программа должна отобразить содержимое файла article.html,
находящегося в корневом каталоге документа. А если пользователь введет путь к файлу
catalog/show.php, программа должна отобразить содержимое файла show.php из катало-
га catalog, входящего в корневой каталог документа. О том, как находить корневой каталог
документа на веб-сервере, см. в табл. 7.1.

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
        print 'Please correct these errors: <ul><li>';
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
   //       echo $name;
         }



function validate_form(){
     	$errors=[];
//проверка на существование файла , доступен для чтения и находится в корне каталога
 	$name=trim($_REQUEST['name']);   

 /*
	if (file_exists('/home/parta/php/php/book/chapter9/home3.php')) {
		print "Index file is there.";
	} else {
		$errors[]= 'Такого файла нет:';
	}
*/
       if (!file_exists($_SERVER['DOCUMENT_ROOT'].'/'.$_REQUEST['name'])) {
                  $errors[]= 'Такого файла нет:';
          
	}
	
	 if (file_exists($_SERVER['DOCUMENT_ROOT'].'/'.$_REQUEST['name'])) {
                    echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/'.$_REQUEST['name']);
  
          }

	
	if (!is_readable($_SERVER['DOCUMENT_ROOT'].'/'.$_REQUEST['name'])) {
	   //	$template = file_get_contents($template_file);
		$errors[]= "Нет прав на чтение";
		}	

   return $errors;
}

