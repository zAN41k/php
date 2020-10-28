<form action="" method="GET">
	<input type="text" name="city">
	<input type="submit">
</form>

<?php
	//Если форма была отправлена и город не пустой:
	if (isset($_REQUEST['city'])) {
		$city = strip_tags($_REQUEST['city']);
		echo 'Ваш город: '.$city;
	}
?>
