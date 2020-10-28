<form action="" method="GET">
	<input type="text" name="name">
	<input type="text" name="age">
	<textarea name="message"></textarea>
	<input type="submit" name="submit">
</form>

<?php
	if (isset($_REQUEST['submit'])) {
		$age = strip_tags($_REQUEST['age']);
		$name = strip_tags($_REQUEST['name']);
		$message = strip_tags($_REQUEST['message']);
		echo "Привет, $name, $age <br> твое сообщение: $message";
	}
?>
