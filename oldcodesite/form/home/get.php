<form action="" method="GET">
<form>

<?php
/*   
Отправьте GET-запрос с помощью ссылки следующего вида (см.
пример). Запишите эти данные в переменные $page и $article.
*/
    $page=trim(strip_tags($_REQUEST['page']));
    $article=trim(strip_tags($_REQUEST['article']));	
    
    echo 'PAGE :' .$page .' '. 'ARTICLE: ' . $article;


?>
