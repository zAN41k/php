  <?php
   //Напишите функцию process_form(), выводящую на экран все параметры переданной на
   //обработку формы и их значения. Можете допустить, что параметры формы имеют только
   //скалярные значения.

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
Your name: <input type="text" name="my_name"><br><br>
Your city:  <input type="text" name="city">
<br/>
<input type="submit" value="Say Hello">
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
  

    // возвращаем, если массив пустой или с ошибками
    return $errors;
}
