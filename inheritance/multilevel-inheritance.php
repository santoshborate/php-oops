<?php
class ClassA
{
    public function getBaseData()
    {
        return "Base parent A";
    }
}
class ClassB extends ClassA
{
    public function getSubBaseData()
    {
        return "Base parent B";
    }
}
class ClassC extends ClassB
{
    public function getChildData()
    {
        return "Child Class";
    }
}
$object = new ClassC;
echo $object->getBaseData();
echo $object->getSubBaseData();
echo $object->getChildData();
