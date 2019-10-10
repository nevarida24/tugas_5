<?php
$x = 5985;// Check if the type of a variable is integer 
var_dump(is_numeric($x));// memastikan apakah x adalah bilangan bulat


// Check again...
$x = "59.85" + 100;
var_dump(is_numeric($x));// memastikan apakah x bilangan bulat

?>