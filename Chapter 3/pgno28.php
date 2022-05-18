<?php
class emp{
    private $fname;
    private $lname;
    public function __construct($fname,$lname)
    {
        echo "Initialising the object...<br>";
        $this->fname=$fname;
        $this->lname=$lname;
    }
    public function showName()
    {
        echo "My name is : Mr. ".$this->fname." ".$this->lname;
    }
}
$sid=new emp("Aazen","Sayyed");
$sid->showName();
?>