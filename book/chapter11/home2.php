<?php
/*
По адресу http://php.net/releases/?json находится лента подачи информации в фор-
мате JSON о последних выпусках версий языка РНР. Напишите программу, в которой функция
file_get_contents() используется для извлечения из этой ленты и последующего вывода
на экран информации о последней выпущенной версии языка РНР

Видоизмените программу из предыдущего упражнения, чтобы воспользоваться расширением
cURL вместо функции file_get_contents().

*/

$url = "https://www.php.net/releases/?json";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$json=curl_exec($ch);
curl_close($ch);


   if($json === false) {
      echo "Не могу прочитать адресс"; 
}
    else{
      $arr=json_decode($json, true);
// var_dump($arr);
      $majorNumber = array_keys($arr);
      rsort($majorNumber);
      $maxNumber= $majorNumber[0];
      $version=$arr[$maxNumber]['version'];
      $data = $arr[$maxNumber]['date'];
      print "Последняя версия PHP $version вышла в $data";
}

?>
