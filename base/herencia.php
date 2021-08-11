<?php
require_once('Employee.php');

$employee = new Employee(60);
var_dump($employee->getUserId());
var_dump($employee->getPassword());

$employee->setName('Oscar');
$employee->setLastName('Pérez');

echo '<br><br>';
var_dump($employee->getFullName());