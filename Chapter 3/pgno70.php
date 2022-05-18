<?php
final class A
{
public function disp()
{
echo "Inside the Parent class";
}
}
class B extends A
{
    function disp()
    {
    echo "Inside the Child class";
    }
    }
    $obj=new B();
    $obj->disp();
?>