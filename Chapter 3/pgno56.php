<?php
class A
{
    public function dis1()
    {
        echo "Parent-A<br>";
    }
}
interface B
{
    public function dis2();
}
class C extends A implements B
{
    function dis2()
    {
        echo "Parent-B<br>";
    }
    public function dis3()
    {
        echo "Child-C<br>";
    }
}
$obj=new C();
$obj->dis1();
$obj->dis2();
$obj->dis3();
?>