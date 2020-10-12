<?php


$meal = array('breakfast' => 'Walnut Bun',
'lunch' => 'Cashew Nuts and White Mushrooms',
'snack' => 'Dried Mulberries',
'dinner' => 'Eggplant with Chili Sauce');
print "<table>\n";
foreach ($meal as $key => $value) {
print "<tr><td>$key</td><td>$value</td></tr>\n";
}
print '</table>';



$row_styles = array('even','odd');
$style_index = 0;
$meal = array('breakfast' => 'Walnut Bun',
'lunch' => 'Cashew Nuts and White Mushrooms',
'snack' => 'Dried Mulberries',
'dinner' => 'Eggplant with Chili Sauce');
print "<table>\n";
foreach ($meal as $key => $value) {
print '<tr class=' . $row_styles[$style_index] . '>';
print "<td>$key</td><td>$value</td></tr>\n";
// Смена значения переменной $style_index с 0 на 1, и обратно
//$style_index = 1 - $style_index;
}
print '</table>';




$meals = array('Walnut Bun' => 1,
               'Cashew Nuts and White Mushrooms' => 4.95,
	       'Dried Mulberries' => 3.00,
	       'Eggplant with Chili Sauce' => 6.50);
foreach ($meals as $dish => $price) {
// выражение $price = $price * 2 HE пройдет!
$meals[$dish] = $meals[$dish] * 2;
}
// перебрать массив снова и вывести измененные
// значения его элементов
foreach ($meals as $dish => $price) {
print "\n";
printf("The new price of %s is \$%.2f.\n",$dish,$price);
}
?>
