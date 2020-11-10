<?php
/*
try {
    $db = new PDO('mysql:host=172.21.0.2;port=3306;dbname=restaurant','root','example');
 	var_dump($db->exec("select * from dishes"));
     // сделать что-нибудь с объектом в переменной $db
    } catch (PDOException $e) {
      print "Couldn't connect to the database: " . $e->getMessage();
}

try {
    $db = new PDO('mysql:host=172.21.0.2;port=3306;dbname=restaurant','root','example');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $q = $db->exec("CREATE TABLE dishes (
      dish_id INT PRIMARY KEY,
      dish_name VARCHAR(255),
      price DECIMAL(4,2),
      is_spicy INT
      )");
} catch (PDOException $e) {
      print "Couldn't create table: " . $e->getMessage();
    }

try {
	$db = new PDO('mysql:host=172.21.0.2;port=3306;dbname=restaurant','root','example');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$affectedRows = $db->exec(
		"insert INTO dishes values (1,'Walnut Bun',1.00,0);
		insert INTO dishes values (2,'Cashew Nuts and White Mushrooms',4.95,0);
		insert INTO dishes values (3,'Dried Mulberries',3.00,0);
		insert INTO dishes values (4,'Eggplant with Chili Sauce',6.50,1);
		insert INTO dishes values (5,'Red Bean Bun',1.00,0);
		insert INTO dishes values (6,'General Tso''s Chicken',5.50,1);"
     );
    }
catch (PDOException $e) {
	print "Couldn't insert a row: " . $e->getMessage();
}
*/

try {
	$db = new PDO('mysql:host=172.21.0.2;port=3306;dbname=restaurant','root','example');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$q=$db->exec("select * from dishes");
//        var_dump($q);
     }
catch (PDOexception $e) {
	print "Couldn't show all "  . $e->getMessage();

	}
?>
