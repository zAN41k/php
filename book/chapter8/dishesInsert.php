
<?php
try
{
    $db = new PDO('mysql:host=172.18.0.2;port=3306;dbname=restaurant','root','example');
}
catch (Exception $e) {
    print "Couldn't connect to database: " . $e->getMessage();
    exit();
}
$fh = fopen('dishes.csv','rb');
$stmt = $db->prepare('INSERT INTO dishes (dish_name, price, is_spicy)
		      VALUES (?,?,?)');
while ((!feof($fh)) && ($info = fgetcsv($fh))) {
    $stmt->execute($info);
    print "Inserted $info[0]\n";
}
// закрыть файл
fclose($fh);

?>
