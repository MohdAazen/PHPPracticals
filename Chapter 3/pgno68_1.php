<?php
class shape 
{ 
 function __call($name_of_function, $arguments)
 { 
if($name_of_function == 'area') 
 { 
 switch (count($arguments))
 { 
 case 1: 
 return 3.14 * $arguments[0]; 
 case 2: 
 return $arguments[0]*$arguments[1];
 } 
 } 
 } 
} 
$s = new Shape(); 
echo("Area of circle:" . $s->area(4)); 
echo "<br>"; 
echo ("Area of Rectangle:" . $s->area(5, 2)) . "<br>";
?>