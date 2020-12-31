<?php



$text="Hello world";
$textCezar="";
$shift=7;
$codeText="";
//$text слово для зашифровки $shift насколько символов смещать
	for($i=0; $i<strlen($text); $i++)  {
		$symbol=ord($text[$i])+$shift;
		//находим ASCII код символа
		if($symbol>255)  {
			$symbol=$symbol-255;
		}

	$codeText.=chr($symbol);
		//записываем закодированный вариант
		}
echo	 $codeText;
	echo "<br>";

	//Этот скрипт раскодирует текст:
//	$codeText="Ave Caesar!";
	$shift=7;
	//$text слово для зашифровки $shift насколько символов смещать
	for($i=0; $i<strlen($codeText); $i++)  {
		$symbol=ord($codeText[$i])-$shift;
		//находим ASCII код символа
		if($symbol<$shift)  {
		$symbol=255-$shift;
	}

	 $textCezar.=chr($symbol);
	//записываем закодированный вариант
}
echo $textCezar;


