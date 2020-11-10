<?php

try {
    $db = new PDO('mysql:host=172.19.0.3;port=3306;dbname=restaurant','root','example');
    // сделать что-нибудь с объектом в переменной $db
      var_dump($db->exec("select * from dishes"));
      var_dump($db);
 
    }
catch (PDOException $e) {
    print "Couldn't connect to the database: " . $e->getMessage();
}
// создание таблицы dishes
/* 
try { 
    $db = new PDO('mysql:host=172.19.0.3;port=3306;dbname=restaurant','root','example');
    $db->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $q = $db->exec("CREATE TABLE dishes(
                    dish_id INT PRIMARY KEY,
                    dish_name VARCHAR(255),
                    price DECIMAL(4,2),
                    is_spicy INT
                    )");
    }
catch (PDOException $e) {
	print "Не могу создать таблицу " . $e->getMessage();
}

*/
//вставка в таблицу dishes значения 

/*
try{
    $db = new PDO('mysql:host=172.19.0.3;port=3306;dbname=restaurant','root','example');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $affectedRows = $db->exec (
				"INSERT INTO dishes (dish_id,dish_name,price,is_spicy)
                                 VALUES(1, 'Sesame Seed Puff', 2.50, 0)");
    }
catch (PDOException $e) {
    print ("Не могу вставить значение в таблицу " . $e->getMessage());
}

/*
// редактирование таблицы, изменение цены
try{
      $db = new PDO('mysql:host=172.18.0.3;port=3306;dbname=restaurant','root','example');
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $affectedRows = $db->exec (
                                  "UPDATE dishes 
				   SET price= 2.50 
				   WHERE price > 12");
         print "Колечиство измененных записей  $affectedRows  $rows ";        
      }  catch (PDOException $e) {
      print ("Не могу вставить значение в таблицу " . $e->getMessage());
  }  
*/
    $q = $db->query('SELECT dish_name, price FROM dishes');
	while ($row=$q->fetch()) {
	  print "$row[dish_name], $row[price] \n";
}   

