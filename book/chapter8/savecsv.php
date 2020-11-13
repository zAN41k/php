<?php

try {
      $db = new PDO('mysql:host=172.18.0.2;port=3306;dbname=restaurant','root','example');
    }
catch (Exception $e) {
      print "Couldn't connect to database: " . $e->getMessage();
     exit();
}
// открыть файл формата CSV для записи
$fh = fopen('dish-list.csv','wb');
$dishes = $db->query('SELECT dish_name, price, is_spicy FROM dishes');
while ($row = $dishes->fetch(PDO::FETCH_NUM)) {
    fputcsv($fh, $row);
}
fclose($fh);
