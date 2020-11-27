<?php

use PHPUnit\Framework\TestCase;
include 'isolate_validation.php';
/*
Введите в код из примера 13.8 тест, обеспечивающий возврат ошибки, если в заполняемой
форме не предъявлено имя.
*/

class IsolateValidationTest extends TestCase {

	public function testDecimalAgeNotValid() {
		$submitted = array('age' => '6.7',
				   'price' => '100',
			       	'name' => 'Julia');

	list($errors, $input) = validate_form($submitted);
// Ожидается только одна ошибка, связанная с возрастом
		$this->assertContains('Please enter a valid age.', $errors);
		$this->assertCount(1, $errors);
}

	public function testDollarSignPriceNotValid() {
		$submitted = array('age' => '6',
				'price' => '$52',
				'name' => 'Julia');

	list($errors, $input) = validate_form($submitted);
// Ожидается только одна ошибка, связанная с возрастом
		$this->assertContains('Please enter a valid price.',
		$errors);
		$this->assertCount(1, $errors);
	}

	public function testValidDataOK() {
		$submitted = array('age' => '15',
				'price' => '39.95',
// Начальные и конечные пробелы
// в имени должны быть удалены
				'name' => ' Julia ');

	list($errors, $input) = validate_form($submitted);
	// Никаких ошибок не ожидается $this->assertCount(0, $errors);
	// Ожидаются три элемента во входных данных
	$this->assertCount(3, $input);
	$this->assertSame(15, $input['age']);
	$this->assertSame(39.95, $input['price']);
	$this->assertSame('Julia', $input['name']);
	}

	public function testIfNotName() {
	$submitted =['age'   => '15', 
		     'price' => '39.95',
		     'name'  => null];
	list($errors, $input) = validate_form($submitted); 
	//Ожидается только одна ошибка, связанная с отсутствием имени
		$this->assertContains('Your name is required.', $errors);
		$this->assertCount(1, $errors);
	}
}


