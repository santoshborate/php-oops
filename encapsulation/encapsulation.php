<?php
//The wrapping up of a data and functions into a single unit(which is called class).
// Encapsulation means that some or all of an objects internal structure is hidden from the outside world.
// Hidden information may only be accessed through the object’s public interface.

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