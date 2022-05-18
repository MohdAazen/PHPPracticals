<?php
class addition 
{ 
 // __call is magic function which accepts function name and arguments 
 function __call($name_of_function, $arguments)
 { 
 // It will match the function name 
if($name_of_function == 'add') 
 { 
 switch (count($arguments))
 { 
 // If there is only one argument area of circle 
 case 1: 
 return $arguments[0]; 
 // IF two arguments then area is rectangle; 
 case 2: 
 return $arguments[0] + $arguments[1]; 
 case 3: 
 return $arguments[0] + $arguments[1] + $arguments[2]; 
 } 
 } 
 } 
} 
// Declaring a addition type object 
$s = new addition; 
echo("Return One value:" . $s->add(10))."<br>"; 
echo ("Addition of two numbers:" . $s->add(10,20)) . "<br>"; 
echo ("Addition of three numbers:" . $s->add(10,20,30)) . "<br>"; 
?>
