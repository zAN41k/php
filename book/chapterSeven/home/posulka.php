

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
        <input type="text" name="address_out" placeholder="Адрес отправителя"><br>
        <input type="text" name="address_in" placeholder="Адрес получателя"><br>
    	<input type="text" name="height" placeholder="Высота посылки"><br>
	<input type="text" name="width" placeholder="Ширина посылки"><br>
	<input type="text" name="length" placeholder="Длина посылки"><br>
        <input type="text" name="weight" placeholder="Вес посылки"><br>
        <input type="text" name="state" placeholder="Штат"><br>
	<input type="text" name="postal" placeholder="Почтовый индекс"><br>

        <input type="submit" name="submit">
      </form> 

_HTML_;
}
###################################################################

function process_form(){
         $address_out=trim(strip_tags($_REQUEST['address_out']));
          $address_in=trim(strip_tags($_REQUEST['address_in']));
          $height=trim(strip_tags($_REQUEST['height']));
         $width=trim(strip_tags($_REQUEST['width']));
         $length=trim(strip_tags($_REQUEST['length']));
         $weight=trim(strip_tags($_REQUEST['weight']));
         $state=trim(strip_tags($_REQUEST['state']));
         $postal=trim(strip_tags($_REQUEST['postal']));
 
         }
####################################################################



function validate_form(){
	$errors=[];

     	 $one = filter_input(INPUT_POST, 'height', FILTER_VALIDATE_INT); //валидация размера посылки
  	 if (is_null($one) || ($one === false) || ($one>91)) {
   	    	 $errors[] = 'Введите числовое значение от 0 до 91 в поле высота ';
        }

	 $two = filter_input(INPUT_POST, 'width', FILTER_VALIDATE_INT);
         if (is_null($two) || ($two === false) || ($two>91)) {
                $errors[] = 'Введите числовое значение от 0 до 91 в поле ширина ';
        }

        $three = filter_input(INPUT_POST, 'length', FILTER_VALIDATE_INT);
        if (is_null($three) || ($three === false) || ($three>91)) {
              $errors[] = 'Введите числовое значение от 0 до 91 в поле длина ';
            }

         $four = filter_input(INPUT_POST, 'weight', FILTER_VALIDATE_INT);
         if (is_null($four) || ($four === false) || ($four>=68)) {
              $errors[] = 'Введите числовое значение от 0 до 68 в поле вес ';
              }

	  $address_out=trim(strip_tags($_REQUEST['address_out']));
          if (is_null($address_out) || (!preg_match('/[^A-Za-z0-9]/', $address_out))) {
        	$errors[] = 'Введите адрес отправителя ';
                }

       	$address_in=trim(strip_tags($_REQUEST['address_in']));
          if (is_null($address_in) || (!preg_match('/[^A-Za-z0-9]/', $address_in))) {
                  $errors[] = 'Введите адрес получателя ';
                  }
	
	 $state=trim(strip_tags($_REQUEST['state'])); 
          if (is_null($state) || (!preg_match('/[^A-Za-z0-9]/', $state)) || !inArr($state) ) {
                 echo $state;   
		 $errors[] = 'Введите ШТАТ ';
                    }

                 


     var_dump($errors);      
     return $errors;

  }
###################################################################
	 

 function inArr($str) {
          $arr=[1,2,3,4,5,'M'];
          if(in_array($str,$arr)) {
          return true;
   } else {return false;}
  }




?>
