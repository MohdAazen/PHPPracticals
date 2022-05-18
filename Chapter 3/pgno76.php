<?php
class Derived
{
    public function details()
    {
        echo "I am a developer(super) class for the child(sub) class. <br>";
    }
}
class sub extends Derived
{
    public function details()
    {
        echo "I'm ".get_class($this),"class.<br>";
        echo "I'm ".get_parent_class($this),"class.<br>";
    }
}
if(class_exists("Derived"))
{
    $der=new Derived();
    echo "The class name is :".get_class($der)."<br>";
    $der->details();
}
if (class_exists("sub")) 
{
 $s = new sub();
 $s->details();
 if (is_subclass_of($s, "Derived"))
 {
 echo "Yes, " .get_class($s) . " is a subclass of Derived.<BR>";
 }
 else
 {
 echo "No, " .get_class($s) . " is not a subclass of Derived.<BR>";
 }
}
?>