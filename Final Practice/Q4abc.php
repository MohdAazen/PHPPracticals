<?php
echo '<h1>By using Indexed/Numeric Array</h1>';

$ind=array(0=>"My",1=>"name", 2=>"is", 3=>"aazen");
print_r ($ind);
echo "<br>";
$ind1[0]="My";
$ind1[1]="name";
$ind1[2]="is";
$ind1[3]="Aazen";
print_r ($ind1);

echo '<h1>By using Associative Array</h1>';

$asso_arr=array("M"=>"y","na"=>"me","i"=>"s","aaz"=>"en");
print_r ($asso_arr);
echo "<br>";
foreach($asso_arr as $i=>$i_val)
{
    echo "$i$i_val ";
}
echo '<h1>By using Multidimensional Array</h1>';
$mul_arr=array(
    array("Aazen",18),
    array("Mohammed",16),
    array("Sayyed",20),
    array("Kalim",30),
    array("Ali",29)
);
print_r ($mul_arr);
echo ($mul_arr[2][0]);
?>