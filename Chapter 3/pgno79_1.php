<?php
 class Test
 {
 function testing_one()
 {
    return(true);
}
function testing_two()
{
return(true);
}
function testing_three()
{
return(true);
}
}
//Class "Test" exist or not
if (class_exists('Test')) 
{
$t = new Test();
echo "The class is exist. <br>";
} 
else 
{
echo "Class does not exist. <br>";
}
//Access name of the class
$p= new Test();
echo "Its class name is " ,get_class($p) , "<br>";
//Aceess name of the methods/functions
$method = get_class_methods(new Test());
echo "<b>List of Methods:</b><br>";
foreach ($method as $method_name) 
{
echo "$method_name<br>";
}
?>
