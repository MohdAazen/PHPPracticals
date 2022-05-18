<?php
abstract class Base
{
    abstract function printdata();
}
class Derived extends base
{
    function printdata()
    {
        echo "Derived class";
    }
}
$obj=new Derived;
$obj->printdata();
?>