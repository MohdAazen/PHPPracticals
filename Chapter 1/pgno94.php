<?php
$per=65;
if($per>=75)
{
    echo "Distinction";
}
else if($per<75 && $per>=60)
{
    echo "First Class";
}
else if($per<60 && $per>=45)
{
    echo "Second Class";
}
else if($per<45 && $per>=40)
{
    echo "Pass Class";
}
else{
    echo "Sorry Fail";
}
?>