<?php
// скрыть город после отправки
	//Если город пустой - покажем форму
	if (!isset($_REQUEST['city'])) {
?>
		<form action="" method="POST">
			<input type="text" name="city">
			<input type="submit">
		</form>
<?php
	}
?>

<?php
	//Если форма была отправлена и город не пустой:
	if (isset($_REQUEST['city'])) {
		$city = strip_tags($_REQUEST['city']);
		echo 'Ваш город: '.$city;
	}
?>



