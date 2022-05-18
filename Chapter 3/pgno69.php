<?php
class Shape
{
 public $length;
 public $width;
 public function __construct($length, $width) {
 $this->length = $length;
 $this->width = $width; 
 }
 public function intro() 
 {
 echo "The length is {$this->length} and the width is {$this->width}."; 
 }
}
class square extends Shape 
{
 public $height;
 public function __construct($length, $width, $height) 
 {
 $this->length = $length;
 $this->width = $width;
 $this->height = $height; 
 }
 public function intro()
 {
 echo "The length is {$this->length}, the width is {$this->width}, the height is {$this->height} "; 
 }
}
$s = new square(10,30,50);
$s->intro();
?>