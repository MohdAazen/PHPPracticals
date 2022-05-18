<?php
interface MyInterfaceName
{ 
 public function method1(); 
 public function method2(); 
 } 
 class MyClassName implements MyInterfaceName
{ 
 public function method1()
 { 
 echo "Method1 Called" . "<BR>"; 
 } 
 public function method2()
 { 
 echo "Method2 Called". "<BR>"; 
 } 
} 
if (interface_exists('MyInterfaceName'))
 {
 echo "Interface exists.<br>";
 }
 else
 {
 echo "Interface does not exists.<br>";
 }
$obj = new MyClassName;
$obj->method1(); 
$obj->method2(); 
?>