<?php
/*
$х = strcmp("х54321","х5678");
if ($х > 0) {
print 'The string "х54321" is greater than the string "x5678".';
} elseif ($x < 0) {
print 'The string "x54321" is less than the string "x5678".';
}
$x = strcmp("54321","5678");
if ($x > 0) {
print 'The string "54321" is greater than the string "5678".';
} elseif ($x < 0) {
print 'The string "54321" is less than the string "5678".';
}
$х = strcmp('6 pack','55 card stud');
if ($x > 0) {
print 'The string "6 pack" is greater than
the string "55 card stud".';
} elseif ($x < 0) {
print 'The string "6 pack" is less than
the string "55 card stud".';
}
$x = strcmp('6 pack',55);
if ($x > 0) {
print 'The string "6 pack" is greater than the number 55.';
} elseif ($x < 0) {
print 'The string "6 pack" is less than the number 55.';
}
*/
// Все проверочное выражение ($finished == false)
// истинно, если значение переменной $finished равно false
$finished = false;
if ($finished == false) {
print 'Not done yet!';
}

$i = 1;
print '<select name="people">';
while ($i <= 10) {
print "<option>\$i</option>\n";
$i++;
}
print '</select>';


print '<select name="people">';
for ($i = 1; $i <= 10; $i++) {
print "<option>\$i</option>\n";
}
print '</select>';

print '<select name="doughnuts">';
for ($min = 1, $max = 10; $min < 50; $min += 10, $max +=10) {
print "<option>\$min - \$max</option>\n";
}
print '</select>';

?>
