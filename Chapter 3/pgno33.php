<?php
class MyDestClass
{
    function __construct()
    {
        print "In Constructor<br>";
    }
    function __destruct()
    {
        print "Destroying ".__CLASS__."<br>";
    }
}
$obj=new MyDestClass();
?>