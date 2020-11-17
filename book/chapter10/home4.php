<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
session_start();

/*
Напишите на РНР программу, отображающую форму заказа, где перечисляются шесть товаров.
Рядом с названием каждого товара должно находиться текстовое поле, в котором пользователь
может ввести количество заказываемого товара. После передачи формы на обработку данные
из нее должны быть сохранены в сеансе. Создайте еще одну страницу, отображающую содер-
жимое сохраненного заказа, обратную ссылку на страницу с формой заказа, а также кнопку
Check Out (Оформить заказ). Если щелкнуть на обратной ссылке, должна появиться страница
с формой заказа, в текстовых полях которой должны быть указаны сохраненные количества
заказанных товаров. А если щелкнуть на кнопке Check Out, то заказ должен быть удален из
текущего сеанса.
*/

	if(isset($_REQUEST['submit'])) {
		$_SESSION['one']=$_REQUEST['one'];
		$_SESSION['two']=$_REQUEST['two'];
		$_SESSION['three']=$_REQUEST['three'];
		$_SESSION['four']=$_REQUEST['four'];
		$_SESSION['five']=$_REQUEST['five'];
		$_SESSION['six']=$_REQUEST['six'];

		var_dump($_SESSION);
	}



?>


<form action="" method="POST">
One item:   <input type="text" name="one" placeholder="кол-во"  value='<?php if(!empty($_SESSION['one'])) echo $_SESSION['one']; ?>'><br>
Two item:   <input type="text" name="two" placeholder="кол-во"  value='<?php if(!empty($_SESSION['two'])) echo $_SESSION['two']; ?>'><br>
Three item: <input type="text" name="three" placeholder="кол-во"value='<?php if(!empty($_SESSION['three'])) echo $_SESSION['three']; ?>'><br>
Four item:  <input type="text" name="four" placeholder="кол-во" value='<?php if(!empty($_SESSION['four'])) echo $_SESSION['four']; ?>'><br>
Five item:  <input type="text" name="five" placeholder="кол-во" value='<?php if(!empty($_SESSION['five'])) echo $_SESSION['five']; ?>'><br>
Six item:   <input type="text" name="six" placeholder="кол-во"  value='<?php if(!empty($_SESSION['six'])) echo $_SESSION['six']; ?>'><br>

	<input type="submit" name="submit">
</form>

