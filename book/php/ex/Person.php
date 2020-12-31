<?php


namespace name;



interface PersonWriter {
    public function write (Person $person);
}


class Person
{
    function getName() : string {
        return 'ИВАН';
    }

    function getAge() : int {
        return 44;
    }
/*
    function __toString() : string {
        $desc = $this->getName();
        $desc .= " (возраст " . $this->getAge() . " лет)";
        return $desc;
    }
*/

    public function output(PersonWriter $writer) {
        $writer->write($this);
    }

}

$person = new Person();

$person->output(
    new class implements PersonWriter {
        public function write(Person $person)
        {
         print  $person->getName(). " " . $person->getAge(). "\n";
            // TODO: Implement write() method.
        }
    }
);