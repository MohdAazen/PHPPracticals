<?php
class A{
    public function dis1()
    {
        echo "Parent-A<br>";
    }
}
trait B
{
    public function dis2()
    {
        echo "Parent-B<br>";
    }
}
class C extends A
{
    use B;
    public function dis3()
    {
        echo "Child-C";
    }
}
$obj=new C();
$obj->dis1();
$obj->dis2();
$obj->dis3();
?>