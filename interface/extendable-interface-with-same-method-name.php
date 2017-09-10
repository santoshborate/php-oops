<?php
interface a
{
    public function foo(); // same method name in both interface
}

interface b extends a
{
    public function baz();
    public function foo(); // same method name in both interface

}

// This will work
class c implements b
{
    public function foo()
    {
        return "Interface a method implementd in class c";
    }

    public function baz()
    {
        return "Interface b method implementd in class c";
    }
}

$object = new c();
echo $object->foo();
echo "<br>";
echo $object->baz();
