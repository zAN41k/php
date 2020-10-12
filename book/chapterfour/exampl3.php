<?php
$meals = array('Walnut Bun' => 1,
'Cashew Nuts and White Mushrooms' => 4.95,
'Dried Mulberries' => 3.00,
'Eggplant with Chili Sauce' => 6.50,
'Shrimp Puffs' => 0); // Shrimp Puffs are free!
$books = array("The Eater's Guide to Chinese Characters",
'How to Cook and Eat in Chinese');
 //Следующая проверка дает истинное значение
if (array_key_exists('Shrimp Puffs ',$meals)) {
print "Yes, we have Shrimp Puffs";
}
 //Следующая проверка дает ложное значение
if (array_key_exists('Steak Sandwich ',$meals)) {
print "We have a Steak Sandwich";
}
 //Следующая проверка дает истинное значение
if (array_key_exists(0, $meals)) {
print "Element 1 is How to Cook and Eat in Chinese";
}



$meals = array('Walnut Bun' => 1,
	'Cashew Nuts and White Mushrooms' => 4.95,
	'Dried Mulberries' => 3.00,
	'Eggplant with Chili Sauce' => 6.50,
	'Shrimp Puffs' => 0);
$dish = array_search(4.95, $meals);
if ($dish) {
print "$dish costs \$4.95";
}

print "\n";

$dishes['Beef Chow Foon'] = 12;
$dishes['Beef Chow Foon']++;
$dishes['Roast Duck'] = 3;
$dishes['total'] = $dishes['Beef Chow Foon']
+ $dishes['Roast Duck'];
if ($dishes['total'] > 15) {
print "You ate a lot: ";
}
print 'You ate ' . $dishes['Beef Chow Foon']
. ' dishes of Beef Chow Foon.';

print "\n";


$dimsum = array('Chicken Bun','Stuffed Duck Web','Turnip Cake');
$menu = implode(', ', $dimsum);
print $menu;


print "\n";

$letters = array('А','В','С','D');
print implode('', $letters);

 print "\n";
$dimsum = array('Chicken Bun','Stuffed Duck Web','Turnip Cake');
print '<tr><td>' . implode ('</td><td>', $dimsum) . '</td></tr>';

 print "\n";

$fish = 'Bass, Carp, Pike, Flounder';
$fish_list = explode(', ', $fish);
print "The second fish is $fish_list[2]";

?>
