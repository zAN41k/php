<form action="" method="GET">
	<input name="name" value="<?php if (isset($_GET['name'])) echo $_GET['name']; ?>">
	<input type="submit">
</form>
<?php
	if (isset($_REQUEST['submit'])) {
		$name = $_REQUEST['name'];
		echo $name;
	}
?>
