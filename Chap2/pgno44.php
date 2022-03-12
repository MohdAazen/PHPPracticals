<?php
$percent = array("Aazen"=>"80","Yogita"=>"78","Siddhesh"=>"68");
echo "<b>Sorting according to Value:</b><br>";
asort($percent);
foreach($percent as $x=>$x_value)
{
    echo "Key=".$x.", Value=".$x_value;
    echo "<br>";
}
echo "<br><br><b>Sorting according to Key:</b><br>";
ksort($percent);
foreach($percent as $x=>$x_value)
{
    echo "Key=".$x.",Value=".$x_value;
    echo "<br>";
    echo "<br>";
}
?>