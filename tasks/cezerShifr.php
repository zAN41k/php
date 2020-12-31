<?php


function shifrCezar(string $text,int $shift) {
	for($i=0; $i<strlen($text); $i++)  {
		$symbol=ord($text[$i])+$shift;
		if($symbol>255)  {
			$symbol=$symbol-255;
	}

	$codeText.=chr($symbol);
	}
	return  $codeText;

}

function deCode(string $text, int $shift) {
	for($i=0; $i<strlen($text); $i++)  {
		$symbol=ord($text[$i])-$shift;
		if($symbol<$shift)  {
		$symbol=255-$shift;
	}
	 $textCezar.=chr($symbol);
	}
	return $textCezar;
}

$cezar="One two three";
echo $new=shifrCezar($cezar,5);
echo "<br>";
echo $decode=deCode($new,5);

