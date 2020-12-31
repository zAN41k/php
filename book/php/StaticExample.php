<?php
class StaticExample {
	static public $aNum=0;
	public static function sayHello(){
		echo "SAY HELLO";
}

}

echo StaticExample::$aNum;
StaticExample::sayHello();

