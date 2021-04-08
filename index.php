<?php

include('./modules/class.php');

/* 
    Print Syntax

    echo(),print(),print_r(),var_dump();

*/

echo "Welcome PHP!". "<br/>";

// calculator
$calObj = new Calculator(5,5); //instance
echo $calObj->add();

