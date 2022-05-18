<?php
class Person
{
    private $fname;
    private $lname;
    public function __construct($fname,$lname)
    {
        echo "Initialising the object...<br>";
    
    $this->fname=$fname;
    $this->lname=$lname;
    }
    public function __destruct()
    {
        echo "Destructing Object...";
    }
    public function showName()
    {
        echo "My name is: Mr. ". $this->fname." ". $this->lname."<br>";
    }
}
$sid=new Person("Aazen","Sayyed");
$sid->showName();
?>