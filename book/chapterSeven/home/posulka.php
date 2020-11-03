

<?php
/*
Напишите программу, отображающую, проверяющую достоверность и обрабатывающую форму
для ввода сведений о доставленной посылке. Эта форма должна содержать поля ввода адресов
отправителя и получателя, а также размеров и веса посылки. При проверке достоверности
данных из переданной на обработку формы должно быть установлено, что вес посылки не
превышает 150 фунтов (около 68 кг), а любой из ее размеров — 36 дюймов (порядка 91 см).
Можете также допустить, что в форме введены адреса США, но в таком случае проверьте
правильность ввода обозначения штата и почтового индекса. Функция обработки формы в
вашей программе должна выводить на экран сведения о посылке в виде организованного,
отформатированного отчета.


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
##################################################################

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
###################################################################
function validate_form(){
   $errors=array();
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
###################################################################
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




?>
