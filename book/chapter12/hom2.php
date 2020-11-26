<?php
error_reporting(E_ALL);

/*Напишите программу, выполняющую основные арифметические операции. С этой целью отоб-
разите форму с текстовым полем для ввода двух операндов и список, размечаемых дескрип-
тором <select>, для выбора операции сложения, вычитания, умножения или деления. Орга-
низуйте проверку достоверности вводимых данных, чтобы они были числовыми и пригодными
для выполнения выбранной арифметической операции. Функция обработки вводимых данных
должна отображать операнды, операцию и результат ее выполнения. Так, если введены опе-
ранды 4 и 2 и выбрана операция умножения, то функция обработки вводимых данных должна
отобразить следующее: 4*2 = 8.

Видоизмените ответ на задание написать функцию validate_form() в упражнении 3 из
главы 7 таким образом, чтобы она выводила имена и значения всех параметров из переданной
на обработку формы в журнал регистрации ошибок на веб-сервере.

*/
if(isset($_REQUEST['submit'])) {
        if($form_errors=validate_form()){
                show_form($form_errors);
     }  else {
		process_form();
	} 
   }  else {
    		show_form();
}

function process_form(){
       $one=trim(strip_tags($_REQUEST['one']));
       $two=trim(strip_tags($_REQUEST['two']));
       $arifmetika=trim(strip_tags($_REQUEST['arifm'])); 
        
       //echo $_REQUEST['arifm']; 
       switch ($arifmetika) {
	case 'plus': 
           echo "Решение: $one + $two = ",$one+$two;
	break;	
        case 'minus':
           echo "Решение: $one - $two = ",$one-$two;
         break;
         case 'umnoj':
             echo "Решение: $one * $two = ",$one*$two;
           break;
	case 'delete':
               echo "Решение: $one / $two = ",$one/$two;
             break;
	}        


}

function validate_form(){
   $errors=array();

	ob_start;//включить буферизацию вывода
	var_dump($_POST);
	$output = ob_get_contents();
	ob_end_clean();
	error_log($output);
	
     	 $one = filter_input(INPUT_POST, 'one', FILTER_VALIDATE_INT);
  	 if (is_null($one) || ($one === false)) {
   
    	 $errors[] = 'Введите число в первое поле ';
        }

	 $two = filter_input(INPUT_POST, 'two', FILTER_VALIDATE_INT);
          if (is_null($two) || ($two === false)) {
     
           $errors[] = 'Введите число во второе поле ';
          }

        $two2 = filter_input(INPUT_POST, 'two', FILTER_VALIDATE_INT);
        $del=$_REQUEST['arifm'];
       if (($del == 'delete') AND ($two2 === 0)) {
       
             $errors[] = 'На ноль делить нельзя  ';
            }
     return $errors;
  }
    
  
   

function show_form($errors = array()) {
 if ($errors) {
        print 'Please correct these errors: <ul><li>';
        print implode('</li><li>', $errors);
        print '</li></ul>';
    }
   print<<<_HTML_
<form action="" method="POST">
      <input type="text" name="one" placeholder="Введите первое число"><br>
      <input type="text" name="two" placeholder="Введите второе число"><br>
        <select name="arifm">
        <option>plus</option>
	<option>minus</option>
	<option>umnoj</option>
	<option>delete</option>
</select>      
 <input type="submit" name="submit">
      </form> 

_HTML_;
}



?>

