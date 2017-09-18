<?php

/**
 * Class AbstractClass
 */
abstract class AbstractClass
{
    // Force Extending class to define this method
     protected function getValue() {
         return "abstract class";
     }
     protected function prefixValue($prefix) {
         return "abstract class";
     }

    // Common method
    public function printOut() {
        print $this->getValue() . "\n";
    }
}


/**
 * Class ConcreteClass1
 */
class ConcreteClass1 extends AbstractClass
{
    protected function getValue() {
        return "ConcreteClass1";
    }

    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass1";
    }
}

/**
 * Class ConcreteClass2
 */
class ConcreteClass2 extends AbstractClass
{
    public function getValue() {
        return "ConcreteClass2";
    }

    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass2";
    }
}

$class1 = new ConcreteClass1;
$class1->printOut();
echo $class1->prefixValue('FOO_') ."\n";

$class2 = new ConcreteClass2;
$class2->printOut();
echo $class2->prefixValue('FOO_') ."\n";
?>
