<form action="" method="POST">
<p>Выберите блюдо:</p>
<select name="dishes">
<option> Walnut Bun</option>
<option> Cashew Nuts and White Mushrooms</option>
<option> Dried Mulberries</option>
<option> Eggplant with Chili Sauce</option>
<option> Red Bean Bun</option>
<option> General Tso's Chicken</option>
</select>
<br/>
<input type="submit" value="submit" name="submit">
</form>

<?php
error_reporting(E_ALL);
ini_set('display_errors','on');
/*
Напишите программу, отображающую форму со списком наименований блюд, размечаемым
дескриптором <select>. Составьте такой список из наименований блюд, извлеченных из базы
данных. После передачи формы на обработку программа должна вывести из таблицы всю
информацию о выбранном блюде, в том числе идентификатор, наименование, цену и наличие
специй в данном блюде.
*/
if(isset($_REQUEST['submit'])) { 

    $db = new PDO('mysql:host=172.18.0.2;port=3306;dbname=restaurant','root','example');
    $db->SetAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_NUM);
    $stmt = $db->prepare('SELECT dish_id, dish_name, price, is_spicy FROM dishes 
		          WHERE dish_name = ?');
    $stmt->execute(array($_REQUEST['dishes']));
		while($row = $stmt-> fetch()){
                    print implode(', ', $row) .  "\n";
  }

}    


?>
