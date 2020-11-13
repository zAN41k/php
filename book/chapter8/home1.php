<?php
/*
Напишите программу, в которой все блюда, находящиеся в таблице dishes, перечисляются
отсортированными по цене.
*/
try {
    $db = new PDO('mysql:host=172.18.0.2;port=3306;dbname=restaurant','root','example');
    // сделать что-нибудь с объектом в переменной $db
   //   var_dump($db->exec("select * from dishes"));
    //  var_dump($db);
        $q = $db->query('SELECT dish_name, price
			 FROM dishes
			 ORDER BY price');
          while ($row = $q->fetch()) {
            print "$row[dish_name], $row[price] \n";
  }

    }
catch (PDOException $e) {
    print "Couldn't connect to the database: " . $e->getMessage();
}

