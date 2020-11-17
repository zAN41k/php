<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
session_start();
//include $_SERVER['DOCUMENT_ROOT'].'/'.'home4.php';
      echo "Содержимое заказа";
	print "\n";
     if(!empty($_SESSION['one'])) {
	echo "Количество товара IDONE:" , $_SESSION['one'];
	print "\n";
}

    if(!empty($_SESSION['two'])) {
          echo "Количество товара IDTwo:" , $_SESSION['two'];
		print "\n";

   }

    if(!empty($_SESSION['three'])) {
          echo "Количество товара IDThree:" , $_SESSION['three'];
		print "\n";

   }

    if(!empty($_SESSION['four'])) {
          echo "Количество товара IDFour:" , $_SESSION['four'];
		print "\n";

   }

    if(!empty($_SESSION['five'])) {
           echo "Количество товара IDFive:" , $_SESSION['five'];
		print "\n";

   }

    if(!empty($_SESSION['six'])) {
           echo "Количество товара IDSix:" , $_SESSION['six'];
		print "\n";

   }
	if(isset($_REQUEST['buy'])) {
	session_destroy();
	echo "ВАШ ЗАКАЗ №1 принят в обработку";
}
?>
<a href="http://localhost:8000/home4.php">НАЗАД</a>

<form action="" method="POST">
<input type="submit" name="buy">

</form>


