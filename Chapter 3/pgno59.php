<?php
interface InterfaceName{
    public function method1();
    public function method2();
}
class ClassName implements InterfaceName
{
    public function method1()
    {
        echo "Method1 Called". "<br>";
    }
    public function method2()
    {
        echo "Method2 Called". "<br>";
    }
}
$obj=new ClassName;
$obj->method1();
$obj->method2();
?>