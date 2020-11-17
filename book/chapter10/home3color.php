<?php
session_start();
$color=$_SESSION['color'];
print $color;
echo "<body bgcolor='$color'>";
?>

