
<?php
session_start();
setcookie('userid','parta');
	if (isset($_SESSION['count'])) {
		$_SESSION['count'] = $_SESSION['count'] + 1;
	} else {
		$_SESSION['count'] = 1;
	}
	//print "Количество просмотров страницы " . $_SESSION['count'] . ' раз.';

	if($_SESSION['count']==5 or $_SESSION['count']==10 or $_SESSION['count']==15 or $_SESSION['count']==20) {
		print "Количество просмотров страницы " . $_SESSION['count'] . ' раз пользователем '. $_COOKIE['userid'];
	}

	if($_SESSION['count']>20) {
	//	unset($_SESSION['count']);
          $_SESSION['count']=1;
	//setcookie('short-userid',''); 
	}
/*
1)
Создайте веб-страницу, на которой cookie-файл используется для слежения за количеством ее
просмотров отдельным пользователем. Когда отдельный пользователь просматривает страницу
в первый раз, на странице должно быть выведено сообщение вроде "Number of views: 1"
(Количество просмотров: 1), а когда данный пользователь просматривает страницу во второй
раз — сообщение "Number of views: 1" ит.д.
2)
Видоизмените веб-страницу из первого упражнения таким образом, чтобы на ней выводилось
специальное сообщение при 5-м, 10-м и 15-м просмотре страницы, а после 20-го просмотра
должен быть удален cookie-файл и подсчет просмотров страницы начат с самого начала
*/
?>

