<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Test Form PHP.SU</title>
</head>
<body>
<h3>Тестовая форма</h3>
<form name="form1" method="post" action="script.php">
<p><span>Текстовое поле: </span>
<input type="text" name="textfield">
</p>
<p>Поле ввода пароля:
<input type="password" name="pswfield">
</p>
<p>Скрытое поле hidden
<input name="hidden" type="hidden" id="hidden" value="Скрытое_значение">
</p>
<hr size="1">
<p>Независимые переключатели (checkbox):</p>
<p>
<input type="checkbox" name="checkbox1" value="1">
Вариант первый
<input type="checkbox" name="checkbox2" value="1">
Вариант второй
<input type="checkbox" name="checkbox3" value="1" checked>
Вариант третий (по умолчанию)</p>
<hr size="1">
<p>Зависимые переключатели (radio):</p>
<p>
<input name="radiobutton" type="radio" value="yes">
Да
<input name="radiobutton" type="radio" value="no">
Нет</p>
<hr size="1">
<p>Многострочное текстовое поле (textarea):</p>
<p>
<textarea name="textarea" cols="40" rows="10">Текст по умолчанию</textarea>
</p>
<hr size="1">
<p>Список с единственным выбором:</p>
<p>
<select name=day_s size=1>
<option value=1>Понедельник</option>
<option value=2>Вторник</option>
<option value=3 selected>Среда</option>
<option value=4>Четверг</option>
<option value=5>Пятница</option>
<option value=6>Суббота</option>
<option value=7>Воскресенье</option>
</select>
</p>
<p>Список с множественным выбором (multiple):</p>
<p>
<select name=day_m[] size=7 multiple>
<option value=1 selected>Понедельник</option>
<option value=2>Вторник</option>
<option value=3>Среда</option>
<option value=4>Четверг</option>
<option value=5>Пятница</option>
<option value=6>Суббота</option>
<option value=7>Воскресенье</option>
</select>
</p>
<hr size="1">
<p>
<input type="submit" value="Отослать форму">
&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Очистить форму">
</p>
<p>&copy;&nbsp;2005 <a href="http://php.su">PHP.SU</a></p>
</form>
</body>
</html>
