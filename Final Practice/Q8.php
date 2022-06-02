<?php
class Rect{
    public $length;
    public $breadth;
    function area($length,$breadth)
    {
        $this->length=$length;
        $this->breadth=$breadth;
        echo "The area of Rectangle is ".$length*$breadth."<br>";
    }
}
class Cuboid extends Rect{
public $width;
function area1($length,$breadth,$width)
{
    $this->width=$width;
    echo "The area of Cuboid is ".(2*($length+$breadth+$width))."<br>";
}
}

$obj1=new Rect();
$obj1->area(20,10);
$obj2=new Cuboid();
$obj2->area1(20,10,30);
?>