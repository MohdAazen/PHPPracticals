<?php
class student
{
 public $name;
 public $city;
 function set_name($name)
{
 $this->name = $name;
 }
 function get_name() {
 return $this->name;
 }
}
$stu1 = new student();
$stu2 = new student();
$stu1->set_name('Aazen');
$stu2->set_name('Siddhesh');
echo $stu1->get_name();
echo "<br>";
echo $stu2->get_name();
?>