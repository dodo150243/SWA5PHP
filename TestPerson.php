<?php
require ('./Person.php');

$ps = new Person();
$salary = $ps->getSalary();

echo ($salary);    
?>