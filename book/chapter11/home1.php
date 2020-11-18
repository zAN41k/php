<?php
/*
По адресу http://php.net/releases/?json находится лента подачи информации в фор-
мате JSON о последних выпусках версий языка РНР. Напишите программу, в которой функция
file_get_contents() используется для извлечения из этой ленты и последующего вывода
на экран информации о последней выпущенной версии языка РНР

Видоизмените программу из предыдущего упражнения, чтобы воспользоваться расширением
cURL вместо функции file_get_contents().
*/

//<?= file_get_contents('http://php.net/releases/?json') 

$c = curl_init('http://php.net/releases/?json');
curl_setopt($c, CURLOPT_RETURNTRASNFER, true);
$json=curl_exec($c);

    if($json === false) {
      print "Не могу получить страницу";
}
    else{
      $feed=json_decode($json, true);
      var_dump($feed);
      $keys = array_keys($feed);
      rsort($keys);
      $maxKey=$keys[0];
      $version = $feed[$maxKey]['version'];
      print "Последняя версия PHP это $version";	
}

?>


