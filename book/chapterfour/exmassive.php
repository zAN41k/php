<?php
$dinner = array('Sweet Corn and Asparagus',
'Lemon Chicken',
'Braised Bamboo Fungus');
$meal = array('breakfast' => 'Walnut Bun',
'lunch' => 'Cashew Nuts and White Mushrooms',
'snack' => 'Dried Mulberries',
'dinner' => 'Eggplant with Chili Sauce');
print "Before Sorting:\n";
foreach ($dinner as $key => $value) {
print " $dinner: $key $value\n";
}
foreach ($meal as $key => $value) {
print " $meal: $key $value\n";
}
sort($dinner);
sort($meal);
print "After Sorting:\n";
foreach ($dinner as $key => $value) {
print " $dinner: $key $value\n";
}
foreach ($meal as $key => $value) {
print "\$meal: $key $value\n";
}

print "\n";

$meal = array('breakfast' => 'Walnut Bun',
'lunch' => 'Cashew Nuts and White Mushrooms',
'snack' => 'Dried Mulberries',
'dinner' => 'Eggplant with Chili Sauce');
print "Before Sorting:\n";
foreach ($meal as $key => $value) {
print " \$meal: $key $value\n";
}
asort($meal);
print "After Sorting:\n";
foreach ($meal as $key => $value) {
print " \$meal: $key $value\n";
}




print "\n";

$meal = array('breakfast' => 'Walnut Bun',
'lunch' => 'Cashew Nuts and White Mushrooms',
'snack' => 'Dried Mulberries',
'dinner' => 'Eggplant with Chili Sauce');
print "Before Sorting:\n";
foreach ($meal as $key => $value) {
print "
\$meal: $key $value\n";
}
ksort($meal);
print "After Sorting:\n";
foreach ($meal as $key => $value) {
print "
\$meal: $key $value\n";
}


$meals = array('breakfast' => ['Walnut Bun','Coffee'],
'lunch' => ['Cashew Nuts', 'White Mushrooms'],
'snack' => ['Dried Mulberries','Salted Sesame Crab']);
$lunches = [ ['Chicken','Eggplant','Rice'],
['Beef','Scallions','Noodles'],
['Eggplant','Tofu'] ];
$flavors = array('Japanese' => array('hot' => 'wasabi',
'salty' => 'soy sauce'),
'Chinese' => array('hot' => 'mustard',
'pepper-salty' => 'prickly ash'));

print $meals['snack'][1];


print "\n";
$specials = array( array('Chestnut Bun',
'Walnut Bun',
'Peanut Bun'),
array('Chestnut Salad',
'Walnut Salad',
'Peanut Salad') );
// Переменная $num_specials содержит значение 2: количество
// элементов в первой размерности массива $specials
for ($i = 0, $num_specials = count($specials); $i < $num_specials;
$i++) {
// Переменная $num_sub содержит значение 3: количество
// элементов в каждом подмассиве
for ($m = 0, $num_sub = count($specials[$i]);
$m < $num_sub; $m++) {
print "Element [$i][$m] is " . $specials[$i][$m] . "\n";
}
}










?>
