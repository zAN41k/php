<?php

class Entree {
public $name;// имя блюда 
public $ingredients = array();// из чего состоит блюда, его декомпозиция из состовляющих

public function hasIngredient($ingredient) { //в это функции мы берем ингридиент и сравниваем его есть ли он в нашем блюде! Происходит это за счет функции сравнения in_array в массиве, где передаешь сначала , что ищешь, какой ингридиент , а затем в каком массиве, в нашем случаем $this->igredients ссылается на тот экземпляр класса, из которого вызывается метод.
return in_array($ingredient, $this->ingredients);
	}
}


$soup=new Entree;
$soup->name='Chicken Soup';
$soup->ingredients = array('chicken','water');

$sandwich= new Entree;
$sandwich->name='Chicken sandwich';
$sandwich->ingredients= array('chicken','bread');

foreach (['chicken','lemon','bread','water'] as $ing) {
	if($soup->hasIngredient($ing)){
	print "Soup contains $ing.\n";  
	 }
	if($sandwich->hasIngredient($ing)){
	print "Sandwich contains $ing.\n";
	}
}


print "\n";

class SimpleClass {
public $var='default';
//обьвление метода
public function displayVar(){
	echo $this->var;
}
}

$simple= new SimpleClass;
$simple->displayVar();// выведет на екран имя пепеменной var значение default;


print "\n";


echo (new DateTime())->format('Y');

print "\n";

class Foo
{
    public $bar = 'свойство';
    
    public function bar() {
        return 'метод';
    }
}

$obj = new Foo();
echo $obj->bar, PHP_EOL, $obj->bar(), PHP_EOL;




?>
