<?php
class Shape
{
    public $length;
    public $width;
    public function __construct($length,$width)
    {
        $this->length=$length;
        $this->width=$width;
    }
    public function intro()
    {
        echo "The length is {$this->length} and the width is {$this->width}.";
    }
}
class Rect extends Shape 
{
    public $height;
    public function __construct($length,$width,$height)
    {
    $this->length=$length;
    $this->width=$width;
    $this->height=$height;
    }
    protected function introduction()
    {
       echo "The length is{$this->length}, the width is {$this->width},and the height is {$this->height}";
    }
}

$r=new Rect(10,20,30);
$r->intro();
$r->introduction();
?>