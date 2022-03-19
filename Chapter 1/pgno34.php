<?php
$num=20;
function local_var()
{ global $num;
echo"Access global variable within the function=$num<br/>";
} echo"<br/>";
echo"Global variable num outside of local_var()=$num<br/>";
?>
