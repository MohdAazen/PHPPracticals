<?php
function static_var()
{
static $x=1;
$y=1;
$x++;
$y++;
echo"x=$x<br/>";
echo"y=$y<br/>";
}
static_var();
static_var();
static_var();
?>
