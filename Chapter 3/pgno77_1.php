<?php
class Demo
{ 
    // just declare the class as "Demo'
    }
    if (class_exists('Demo')) 
     {
     $demo = new Demo();
     echo "This is Demo class";
     } 
    else 
     {
     echo "Class does not exist";
     }
?>