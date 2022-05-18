<?php
class text
{
    public function display($parameter1)
    {
        echo "Hello world!!!";
    }
    public function display($parameter1,$parameter2)
    {
        echo "Hello India!!!";
    }
}
$obj = new text;
$obj->display('Hello');
?>