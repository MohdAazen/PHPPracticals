<?php
class Shape{
    public $length;
    public $width;
    public function __construct($length,$width)
    {
        $this->length=$length;
        $this->width=$width;
    }
    protected function intro()
    {
        echo "The length is {$this->length} and the width is {$this->width}.";
    }
}
class Rect extends Shape
{
    public function introduction()
    {
        echo "The shape is rectangle.";
        $this->intro();
    }
}
$r=new Rect(10,20);
$r->introduction();
?>