<?php
/*
Обменный фонд GitHub (GitHub gist) — это фрагмент текста или кода, которым легко об-
мениваться с другими. Прикладной программный интерфейс GitHub API позволяет созда-
вать такой обменный фонд без дополнительной регистрации. Напишите программу для со-
здания обменного фонда, содержащего ее исходный код. Имейте в виду, что прикладной
программный интерфейс GitHub API потребует от вас установить заголовок User-Agent в
НТТР-запросах к нему. Для установки этого заголовка можете воспользоваться параметром
CURLOPT_USERAGENT.
*/

$url = 'https://api.github.com/gists';
$data = ['public' => true,
    'description' => "This program a gist of itself.",
          'files' => [basename (
	__FILE__) => [ 'content' => file_get_contents(__FILE__) ] ] ];

$c = curl_init($url);
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
curl_setopt($c, CURLOPT_POST, true);
curl_setopt($c, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($c, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($c, CURLOPT_USERAGENT, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36');

$response = curl_exec($c);
     if ($response === false) {
	print "Couldn't make request.";
    }
     else {
       $info = curl_getinfo($c);
     if ($info['http_code'] != 201) {
	print "Couldn't create gist, got {$info['http_code']}\n";
	print $response;
     }
     else {
	$body = json_decode($response);
		print "Created gist at {$body->html_url}\n";
}
}


?>
