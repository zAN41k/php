// Переменная $_POST['zipcode'] содержит значение параметра
// "zipcode" из переданной на обработку формы
$zipcode = trim($_POST['zipcode']);
// А теперь это значение с удаленными начальными и конечными
// пробелами содержит переменная $zipcode
$zip_length = strlen($zipcode);
// выдать предупреждение, если указан почтовый индекс
// длиной меньше 5 символов
if ($zip_length != 5) {
print "Please enter a zip code that is 5 characters long.";
}
