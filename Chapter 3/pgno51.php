<?php
class a
{
    function function_a()
    {
    echo "class A<br>";
    }
}
class b extends a
{
    function function_b()
    {
    echo "class B<br>";
    }
}
class c extends a
{
    function function_c()
    {
    echo "class C<br>";
    }
}
$obj=new c();
$obj->function_c();
$obj->function_a();
?>