<?php
function add($a,$b){
    echo "I am in add function<br>";
    echo $a+$b."<br>";
    echo "Exiting the add function<br>";
}
function display()
{
    echo "I am in display function<br>";
    add(34,34);
    echo "Exiting the display function<br>";

}
    // function Morning()
    // {
    //     echo "Good Morning...";
    // }
    // function Evening()
    // {
    //     Morning();
    //     echo "Good Evening...";
    // }
    // function Night()
    // {
    //     Evening();
    //     echo "Good Night...";
    // }
// Night();
 display();
?>