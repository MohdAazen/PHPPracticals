<?php
interface A{
    public function dis1();
}
interface B{
    public function dis2();
}
class C implements A,B
{
    function dis1()
    {
        echo "Parent-A<br>";
    }
    function dis2()
    {
        echo "Parent-B<br>";
    }
    public function dis3(){
        echo "Child-C";
    }
}
$obj=new C();
$obj->dis1();
$obj->dis2();
$obj->dis3();
?>