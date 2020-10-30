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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($form_errors = validate_form( )) {
        show_form($form_errors);
    } else {
        process_form( );
    }
} else {
    show_form( );
}

// обработать форму
function process_form( ) {
    print "Hello, ". $_POST['my_name'];
    print "\n";
    print "Your city is ". $_POST['city'];
    print "Your znak is ". $_POST['znak'];
}

// вывести форму
function show_form($errors = array()) {
    // If some errors were passed in, print them out
    if ($errors) {
        print 'Исправьте ошибки : <ul><li>';
        print implode('</li><li>', $errors);
        print '</li></ul>';
    }

    print<<<_HTML_
<form method="POST" action="">
first number: <input type="text" name="one"><br><br>
second number:  <input type="text" name="two"><br><br>
<p>Выберите действие:</p>
<select name="znak">
<option value="plus">плюс</option>
<option value="minus">минус</option>
<option value="ymnoj">умножение</option>
<option value="delete">деление</option>

</select>
<br/>
<input type="submit" value="submit">
</form>
_HTML_;
}

// валидация формы проверить данные
function validate_form( ) {
    // Start with an empty array of error messages
    $errors = array( );

    // Add an error message if the name is too short
    if (strlen($_POST['my_name']) < 3) {
        $errors[  ] = 'Введите имя больше трех символов';
    }
    if (strlen($_POST['my_name']) > 12) {
          $errors[  ] = 'Введите имя меньше 12 символов';
     }
              
    if (strlen($_POST['city']) < 3) {
          $errors[  ] = 'Введите город больше трех символов';
      }
     if (strlen($_POST['city']) > 40) {
           $errors[  ] = 'Введите город меньше 40 символов';
       }
       
     if(strlen($POST['znak'])< 3)  {
      $errors [] = 'Такого не может быть ;)';
    } 
    // возвращаем, если массив пустой или с ошибками
    return $errors;
}





