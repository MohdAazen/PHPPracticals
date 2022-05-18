<?php
class demo{
    var $first=10;
    var $second=20;
    function add()
    {
        $add=$this->first + $this->second;
        echo "Addition= ".$add."<br>";
    }
    function sub()
    {
        $sub=$this->first - $this->second;
        echo "Subtraction= ".$sub."<br>";
    }
    function mul()
    {
        $mul=$this->first * $this->second;
        echo "Multiplication= ".$mul."<br>";
    } 
    function summary()
    {
        $this->add();
        $this->sub();
        $this->mul();
        $res=$this->first * $this->second;
        echo "Multiplication= ".$res;
    }  
}
$obj=new demo();
$obj->summary();
?>