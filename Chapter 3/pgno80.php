<?php
$var=array("Welcome",568,array(1,'two'),"VP");
$string=serialize($var);
print_r($string."<br>");
$newvar=unserialize($string);
print_r($newvar);
?>