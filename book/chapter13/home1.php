<?php

use PHPUnit\Framework\TestCase;

/*
Следуя инструкциям, приведенным в разделе “Установка PHPUnit” в начале этой главы. Для
установки инструментального средства PHPUnit, напишите тестовый класс с единственным
тестом, содержащим одно простое утверждение, которое передается соответствующему мето-
ду (например, $this-> assertEquals(2, 1 + 1);), а затем выполните созданный вами
тестовый класс средствами PHPUnit.
*/
class home1 extends TestCase {

	public function testSummary () {
	
		$this->assertEquals(2, 1 + 1);
	}
}
