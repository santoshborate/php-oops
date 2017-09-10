<?php
interface a
{
    public function foo();
}

interface b
{
    public function bar();
}

interface c extends a, b
{
    public function baz();

}

// This will work
class d implements c
{
    public function foo()
    {
        return "Interface a method implementd in class d";
    }

    public function bar()
    {
        return "Interface b method implementd in class d";
    }

    public function baz()
    {
        return "Interface c method implementd in class d";
    }
}

$object = new d();
echo $object->foo();
echo "<br>";
echo $object->bar();
echo "<br>";
echo $object->baz();
