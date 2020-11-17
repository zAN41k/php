<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
session_start();
/*
Напишите на РНР программу, отображающую форму, где пользователь может выбрать излюб-
ленный цвет из списка. Создайте еще одну страницу с цветом фона, выбранным пользователем
в данной форме. Сохраните значение этого цвета в массиве $_SESSION, чтобы сделать его до-
ступным на обеих страницах.
*/
	if(isset($_REQUEST['submit'])) {
		$_SESSION['color']=$_REQUEST['color'];
		var_dump($_SESSION);
	}

?>
<form action="" method="POST">
<p>Select color:</p>
<select name="color"> 
  <option>GREEN</option>
  <option>YELLOW</option>
  <option>RED</option>
</select>
<input type="submit" name="submit">
