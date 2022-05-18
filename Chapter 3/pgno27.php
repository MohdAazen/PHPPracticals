<?php
class Sample
{
    function Sample()
    {
        echo "Its a user-defined Constructor of the class Sample";
    }
    function __construct()
    {
        echo "Its a pre-defined Constructor of the class Sample";
    }
}
$obj= new Sample();
?>