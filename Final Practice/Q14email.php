<?php
$to="fazilatsayyed11@gmail.com";
$subject="This is subject";
$message="This is message";
$header="From: sayyedaazen81@gmail.com \r\n";
$retvalue=mail($to,$subject,$message,$header);
if($retvalue==true)
{
    echo "Message sent"; 
}
else{
    echo "Failed"; 
}
?>