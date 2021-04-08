<?php

/* 
    Function

*/

echo("Functions of PHP!"."<br/>");

function add($a=0,$b=0){
    $result = $a + $b;
    return $result;
};

$sum = add(10,20);

echo $sum;