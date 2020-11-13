<?php
try {
    $db = new PDO('mysql:host=172.18.0.2;port=3306;dbname=restaurant','root','example');
} 
catch (Exception $e) {
    print "Couldn't connect to database: " . $e->getMessage();
    exit();
}

// открыть файл dishes.txt для записи
$fh = fopen('dishes.txt','wb');
$q = $db->query("SELECT dish_name, price FROM dishes");
while($row = $q->fetch()) {
    // записать каждую строку (с завершающим знаком перевода
    // строки) в файл dishes.txt
    fwrite($fh, "The price of $row[0] is $row[1] \n");
    }
    fclose($fh);


?>
