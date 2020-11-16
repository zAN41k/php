<?php
/*
Отобразите файл формата CSV в виде HTML-таблицы. Если у вас нет под рукой такого файла
(или программы электронных таблиц), воспользуйтесь данными из примера 9.9.
*/?>

<table>
	<tr>
		<th>name</th>
		<th>price</th>
		<th>spicy</th>
	</tr>
<?php
$row = 1;
if (($handle = fopen("data.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
 	$result .= '<tr>';
	$result .= '<td>' . $data['0'] . '</td>';
	$result .= '<td>' . $data['1'] . '</td>';
	$result .= '<td>' . $data['2'] . '</td>';
	$result .= '</tr>';
        $row++;
    }
    echo $result;
    fclose($handle);
}


?>
</table>

