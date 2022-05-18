<?php
class grandparent
{
    function dis1()
    {
        echo "Grand-Parents<br>";
    }
}
class parents extends grandparent
{
    function dis2()
    {
        echo "Parents<br>";
    }
}
class child extends parents
{
    function dis3()
    {
        echo "Child<br>";
    }
}
$obj=new child();
$obj->dis1();
$obj->dis2();
$obj->dis3();
?>