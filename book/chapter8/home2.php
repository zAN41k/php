 <form action="" method="POST">
 <input type="text" name="price" placeholder="Введите минимальную цену блюда"><br>
 <input type="submit" name="submit">
 </form>


<?php
/*Напишите программу, отображающую форму с запросом блюд по их цене. После передачи
формы на обработку программа должна вывести наименования и цены тех блюд, которые
стоят не меньше, чем указано в форме. Не извлекайте из таблицы базы данных строки или
столбцы, которые не подлежат выводу на экран.
*/
if(isset($_REQUEST['submit'])) { 

    $db = new PDO('mysql:host=172.18.0.2;port=3306;dbname=restaurant','root','example');
    $db->SetAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_NUM);
    // сделать что-нибудь с объектом в переменной $db
   //   var_dump($db->exec("select * from dishes"));
    //  var_dump($db);
   
    $stmt = $db->prepare('SELECT dish_name, price, is_spicy FROM dishes 
		          WHERE price >= ?');
    $stmt->execute(array($_REQUEST['price']));
		while($row = $stmt-> fetch()){
                    print implode(', ', $row) .  "\n";
  }

}    





