<?php
class sample
{
public $variable1;
private $variable2;
function __construct($variable1, $variable2)
{
$this->variable1 = $variable1;
$this->variable2 = $variable2;
}
}
$variable1 = new sample("Siddheh" , "Software Developer");
$variable2 = $variable1; //Copy of the object
$variable1->variable1 = "Sunil";
print_r($variable1);
echo "<br>";
print_r($variable2);
?>
