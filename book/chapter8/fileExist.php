<?php
if (file_exists('/home/parta/php/php/book/chapter8/index.php')) {
print "Index file is there.";
} else {
print "No index file in /usr/local/htdocs.";
}


$template_file = 'index.php';
if (is_readable($template_file)) {
$template = file_get_contents($template_file);
} else {
print "Can't read template file.";
}

$log_file = '/home/parta/php/php/book/chapter8/file.txt';
if (is_writeable($log_file)) {
$fh = fopen($log_file,'ab');
fwrite($fh, $_SESSION['username'] . ' at '
. strftime('%c') . "\n");
fclose($fh);
} else {
print "Cant write to log file.";
}

?>
