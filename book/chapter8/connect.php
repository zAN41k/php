<?php

try {
$db = new PDO('mysql:host=localhost;dbname=restaurant',
'root','example');
// сделать что-нибудь с объектом в переменной $db
} catch (PDOException $е) {
print "Couldn't connect to the database: " . $e->getMessage();
}



