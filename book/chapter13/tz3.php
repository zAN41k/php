<pre>
<?php
$height = 5;

$space = $height;
for($i = 1; $i <= $height; $i++) {
    echo str_repeat(' ', --$space);
    for($j=1;$j<=$i;$j++){
        if($j > 1) {
            echo ' ';
        }
        echo '*';
    }
    echo '<br />';
}
?>
</pre>
