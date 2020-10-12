<?php
$dinner=array('Sweet corn',
              'Lemon Chicken',
	      'Braised Bamboo Fungus');
foreach($dinner as $dish)  {
   print  print "You can eat: $dish\n";

}


$dinner = array('Sweet Corn and Asparagus',
'Lemon Chicken',
'Braised Bamboo Fungus');
for ($i = 0, $num_dishes = count($dinner); $i < $num_dishes; $i++) {
print "Dish number $i is $dinner[$i]\n";
}

$letters[0] = 'A';
$letters[1] = 'B';
$letters[3] = 'D';
$letters[2] = 'C';

foreach ($letters as $letter) {
print $letter;
print "\n";
}

$letters[0] = 'A';
$letters[1] = 'B';
$letters[3] = 'D';
$letters[2] = 'C';

for ($i=0,$num_letters=count($letters);
   $i < $num_letters; $i++) {
print $letters[$i];
print "\n";
}
?>
