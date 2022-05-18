<?php
class A
{
final public function disp()
{
echo "Inside the Parent Class";
}
}
class B extends A
{
function disp()
{
echo "Inside the Child Class";
}
}
$obj=new B();
$obj->disp();
?>