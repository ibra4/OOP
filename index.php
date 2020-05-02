<?php

require "vendor/autoload.php";

ini_set('display_errors', 1);
error_reporting(E_ALL);

use MainApp\Computer;

$computer = new Computer();

$computer->setName("name");
$computer->setRam("4GB");
$computer->setCpu("Core i-3");

echo "<pre>";
echo "Computer Full Object : <br>";
print_r($computer);
echo "</pre>";


echo "<pre>";
echo $computer->getFullSpecifications();
echo "</pre>";