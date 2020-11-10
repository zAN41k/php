<?php
<from action="" method="POST">
<input type="text" name="new_dish_name" placeholder="Enter dish name"><br>
<input type="text" name="new_price" placeholder="Enter price"><br>
<input type="text" name="is_spicy" placeholder="Enter spicy 1 or 0"><br>
<input type="submit" name="submit">



try {
    $db = new PDO('mysql:host=172.20.0.3;port=3306;dbname=restaurant','root','example');
    // сделать что-нибудь с объектом в переменной $db
    //var_dump($db->exec("select * from dishes"));
      var_dump($db);
     $stmt = $db-> prepare('INSERT INTO dishes (dish_name, price, is_spicy)
			   VALUES (?, ?, ?)');
     $stmt->execute(array($_REQUEST['new_dish_name'],$_REQUEST['new_price'],$_REQUEST['is_spicy']));
    }
catch (PDOException $e) {
    print "Couldn't connect to the database: " . $e->getMessage();
}


