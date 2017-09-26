<?php

//Any representation of data in which the implementation details are hidden (abstracted).
// • Data abstraction refers to, providing only essential information to the outside word and hiding their background details
// ie. to represent the needed information in program without presenting the details
// • They provide sufficient public methods to the outside world to play
// with the functionality of the object and to manipulate object data
// ie. state without actually knowing how class has been implemented internally.

class ConcreteClass
{
    private $name;

    public function setData($name ) {
        $this->name = $name;
    }

    public function getData() {
        echo $this->name;
    }
}

$class = new ConcreteClass;
$class->setData("Pacman");
echo $class->getData();