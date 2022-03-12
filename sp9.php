<?php
$sum = 0;
for($i=1;$i<=10;$i++)
{
    echo "$i<br/>";
    $sum=$sum+$i;
}
echo "sum=$sum<br/>";
$average=(float)$sum/$i;
echo "Average=$average";
?>