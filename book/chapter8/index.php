<?php

require 'FormHelper.php';
// подключиться к базе данных
try {
$db = new PDO('mysql:host=172.18.0.2;port=3306;dbname=restaurant','root','example');
    } catch (PDOException $e) {
	print "Can't connect: " . $e->getMessage();
	exit();
}

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

$dishes = [];
$sql = 'SELECT dish_id, dish_name FROM dishes ORDER BY dish_name';
$stmt = $db->query($sql);
while ($row = $stmt->fetch()) {
	$dishes[$row->dish_id] = $row->dish_name;
}

if($_SERVER['REQUEST_METHOD'] = 'POST') {
list($errors, $input) = validate_form();
if ($errors) {
	show_form($errors);
}
else {
	process_form($input);
}
}
else {
	show_form();
}


function show_form($errors = array()) {
global $db, $dishes;
$form = new FormHelper();
include 'customer-form.php';
}
function validate_form() {
global $dishes;
$input = array();
$errors = array();
$input['dish_id'] = $_POST['dish_id'] ?? '';
	if (! array_key_exists($input['dish_id'], $dishes)) {
		$errors[] = 'Please select a valid dish.';
}

$input['name'] = trim($_POST['name'] ?? '');
	if (0 == strlen($input['name'])) {
		$errors[] = 'Please enter a name.';
}

$input['phone'] = trim($_POST['phone'] ?? '');
	if (0 == strlen($input['phone'])) {
		$errors[] = 'Please enter a phone number.';
}      else {
		$digits = 0;
		for ($i = 0; $i < strlen($input['phone']); $i++) {
       	if (ctype_digit($input['phone'][$i])) {
		$digits++;
}
}

	if ($digits < 10) {
		$errors[] = 'Phone number needs at least ten digits.';
                          } 
       }
	return array($errors, $input);
}



function process_form($input) {
global $db;
$sql = 'INSERT INTO customers (name,phone,favorite_dish_id) '
	. 'VALUES (?,?,?)';

try {
	$stmt = $db->prepare($sql);
	$stmt->execute(array($input['name'],$input['phone'],
	$input['dish_id']));
	print '<p>Inserted new customer.</p>';
} catch (Exception $e) {
	print "<p>Couldn't insert customer:{
			$e->getMessage()},</p>";
}
}
?>
