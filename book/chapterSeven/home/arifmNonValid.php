<?php
/*Напишите программу, выполняющую основные арифметические операции. С этой целью отоб-
разите форму с текстовым полем для ввода двух операндов и список, размечаемых дескрип-
тором <select>, для выбора операции сложения, вычитания, умножения или деления. Орга-
низуйте проверку достоверности вводимых данных, чтобы они были числовыми и пригодными
для выполнения выбранной арифметической операции. Функция обработки вводимых данных
должна отображать операнды, операцию и результат ее выполнения. Так, если введены опе-
ранды 4 и 2 и выбрана операция умножения, то функция обработки вводимых данных должна
отобразить следующее: 4*2 = 8.
*/
if(isset($_REQUEST['submit'])) {
 //	$one=trim(strip_tags($_REQUEST['one']));
//	$two=trim(strip_tags($_REQUEST['two']));
                process_form();
}   else {
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
      

//print 'Первое число: '.$_REQUEST['one'].' '.' Второе число: '.$_REQUEST['two'].' Третье число: '.$_REQUEST['three'];

}

function show_form() {
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

