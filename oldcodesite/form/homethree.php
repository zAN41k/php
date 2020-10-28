<?php
	if (!isset($_REQUEST['age'])) {
?>
		<form action="" method="GET">
			<input type="text" name="age">
			<input type="submit">
		</form>
<?php
	}
?>

<?php
	if (isset($_REQUEST['age'])) {
		$age = strip_tags($_REQUEST['age']);
		echo 'Ваш возраст: '.$age;
	}
?>
