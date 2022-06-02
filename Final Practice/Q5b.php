<?php
$str="welcome to php";
$str1="WELCOME TO PHP";

$rev=strrev($str);
echo "$rev<br>";

$repeat=str_repeat("*",10);
echo "$repeat<br>";

$upper=strtoupper($str);
echo "$upper<br>";

$lower=strtolower($str1);
echo "$lower<br>";

$uppercasewords=ucwords($str);
echo "$uppercasewords<br>";

$stringposition=strpos("welcome to php","to");
echo "$stringposition<br>";

$trimming=rtrim($str,"php");
echo "$trimming<br>";

$trimming=ltrim($str,"welcome");
echo "$trimming<br>";

$chopping=chop("   Welcome    ". "to PHP");
echo "$chopping<br>";

$substr=(substr($str,0,7));
echo "$substr<br>";


$replacing=str_replace("to",'in',$str);
echo "$replacing";
?>