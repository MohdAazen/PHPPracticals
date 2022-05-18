<?php
class a
{
    function dis1()
    {
        echo "Hello PHP<br>";
    }
}
class b extends a
{
    function dis2()
    {
        echo "PHP Programming<br>";
    }
}
$obj=new b();
$obj->dis1();
$obj->dis2();
?>