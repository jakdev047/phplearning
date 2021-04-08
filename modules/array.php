<?php

/* 
    Array

    Indexed Arrays -> $cars = array("Volvo", "BMW", "Toyota");
    Associative Arrays -> $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    Multidimensional Arrays 

*/

echo("Array of PHP!"."<br/>");

// Indexed Arrays
$cars = array("Volvo", "BMW", "Toyota");
echo '<pre>';
print_r($cars);
echo "Indexed Arrays ".$cars[0]."<br/>";

// Associative Arrays
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo '<pre>';
print_r($age);
echo "Peter is " . $age['Peter'] . " years old.". "<br/>";

// Multidimensional Arrays
$manyCars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);
echo '<pre>';
print_r($manyCars);
echo $manyCars[0][0].": In stock: ".$manyCars[0][1].", sold: ".$manyCars[0][2].".<br>";