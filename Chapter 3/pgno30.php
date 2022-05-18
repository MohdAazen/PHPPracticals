<?php
class Employee
{
    public $name;
    public $profile;
    function __construct($name,$position)
    {
        $this->name=$name;
        $this->profile=$position;
    }
    function show_details()
    {
        echo $this->name." : ";
        echo "Your position is ". $this->profile."<br>";
    }
}
$employee_obj=new Employee("Aazen Sayyed","Developer");
$employee_obj->show_details();
$employee2=new Employee("Vijay Patil","Manager");
$employee2->show_details();

?>