<?php
class Rectangle
{
 // Declare properties
 public $length = 0;
 public $width = 0;
 // Method to get the perimeter
 public function getPerimeter()
{
 return (2 * ($this->length + $this->width));
 }
 // Method to get the area
public function getArea()
{
 return ($this->length * $this->width);
 }
}
// Create a new object from Rectangle class
$obj = new Rectangle;
// Get the object properties values
echo $obj->length . "<br>"; // 0utput: 0
echo $obj->width . "<br>"; // 0utput: 0
// Set object properties values
$obj->length = 30;
$obj->width = 20;
// Read the object properties values again to show the change
echo "Length:" . $obj->length . "<br>"; // 0utput: 30
echo "Width:" . $obj->width . "<br>"; // 0utput: 20
// Call the object methods
echo "Perimeter:" . $obj->getPerimeter() . "<br>"; // 0utput: 100
echo "Area:" . $obj->getArea() . "<br>"; // Output: 600