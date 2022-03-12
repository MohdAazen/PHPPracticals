<?php
$ch=1;
$a=20;
$b=10;
switch($ch)
{
    case 1:
        $c=$a+$b;
        echo "Addition =".$c;
        break;
    case 2:
        $c=$a-$b;
        echo "Subtraction =".$c;
        break;
    case 3:
        $c=$a*$b;
        echo "Multiplication =".$c;
        break;
    case 4:
        $c=$a/$b;
        echo "Division =".$c;
        break;
    default:
        echo "Wrong Choice";
}
?>