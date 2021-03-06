<?php

use PHPUnit\Framework\TestCase;

include 'FormHelper.php';
/*
Напишите тесты для проверки поведения функции select() из примера 7.29, рассмотрев
следующие случаи.
• Если предоставляется ассоциативный массив параметров, каждый дескриптор <option>
должен быть воспроизведен с ключом из массива в качестве атрибута value дескрип-
тора <option> и значением из массива в качестве текста, заключенного в дескрипторы
<option> и </option>.
• Если предоставляется числовой массив параметров, каждый дескриптор <option> дол-
жен быть воспроизведен с индексом массива в качестве значения атрибута value это-
го дескриптора и значением из массива в качестве текста, заключенного в дескрипторы
<option> и </option>.
• Если ни один из атрибутов не предоставлен, то открывающим должен быть дескриптор
<select>.
• Если предоставлен атрибут с логическим значением true, то в открывающем дескрипторе
<select> должно быть указано только имя этого атрибута.
Если предоставлен атрибут с логическим значением false, то такой атрибут не следует
указывать в открывающем дескрипторе <select>.
• Если предоставлен атрибут с любым другим значением, то сам атрибут и его значе-
ние должны быть указаны в открывающем дескрипторе <select> в виде пары атри-
бут=значение.
• Если установлен атрибут multiple, к значению атрибута name должны быть присоеди-
нены квадратные скобки ([]) в открывающем дескрипторе <select>.
• Любые значения атрибутов или текстовые описания параметров, содержащие такие специ-
альные символы, как < или &, должны быть воспроизведены с помощью закодированных
HTML-представлений вроде &lt; или &аmр;.
*/

class FormHelperTest extends TestCase {
	
	


}
