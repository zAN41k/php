<?php
try {
$db = new PDO('mysql:host=172.18.0.2;port=3306;dbname=restaurant','root','example');
} catch (PDOException $e) {
    print "Couldn't connect to database: " . $e->getMessage();
    exit();
}
// уведомить веб-клиента, что ему передается файл формата CSV
// под названием dishes.csv
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="dishes.csv"');
// открыть файл с дескриптором потока вывода
$fh = fopen('php://output','wb');
// извлечь информацию из таблицы базы данных и
// вывести ее на экран
$dishes = $db->query('SELECT dish_name, price, is_spicy FROM dishes');
while ($row = $dishes->fetch(PDO::FETCH_NUM)) {
    fputcsv($fh, $row);
}
?>
