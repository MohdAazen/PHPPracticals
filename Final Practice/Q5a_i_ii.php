<?php
$str="Welcome to php";
$count=(strlen($str));
echo "Length of string is $count<br>";
$counting=1;
for($i=1;$i<strlen($str);$i++)
{
    if($str[$i]==" ")
    {
        $counting++;
    }
}
echo "There are $counting words in the string $str";
?>