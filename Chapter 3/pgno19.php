<?php
class Rectangle
{
 public $length = 0;
 public $width = 0;
 public function getArea()
{
 return ($this->length * $this->width);
}
}
$obj1 = new Rectangle;
$obj2 = new Rectangle;
echo "Area of object1:".$obj1->getArea()."<br>";
echo "Area of object2:".$obj2->getArea()."<br>";
$obj1->length = 30;
$obj1->width = 20;
$obj2->length = 35;
$obj2->width = 50;
echo "After calling<br>";
echo "Area of object 1: ".$obj1->getArea()."<br>";
echo "Area of object 2: ".$obj2->getArea()."<br>";
?>