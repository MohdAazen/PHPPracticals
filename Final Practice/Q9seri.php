<?php
$data=array("Welcome",568,array("Hello",453,"Thank you"),"Happy");
$ser_data=serialize($data);
print_r ($ser_data."<br>");

$us=unserialize($ser_data);
print_r ($us);
?>