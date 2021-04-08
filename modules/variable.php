<?php

/* 
    variable of PHP

    string -> 'Jubayer'
    Integer -> 47
    Float -> 47.047
    Boolean -> true/false
    Array -> array('red', 'green', 'blue')
    null
    Resources
    object ->

    declare keyword of php
    
    $name = 'jubayer'
    define('PI',3,1416)

*/

echo("Variable of PHP!"."<br/>");

$name = 'Jubayer';
define('PI',3.1416);

echo("Name: ".$name."<br/>");
echo constant("PI");

// $_SESSION
session_start();
print_r($_SESSION);