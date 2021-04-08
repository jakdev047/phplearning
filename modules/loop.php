<?php

/* 
    Loop

    for
    while
    do...while

*/

echo("Loop of PHP!"."<br/>");

$colors = ["Red","Green","Blue"];
$limit = count($colors);
for ($i=0; $i < $limit; $i++) { 
    echo $colors[$i]."<br/>";
}

// Associative Arrays & forEach function
echo("Associative Arrays & forEach function "."<br/>");

$product = [
    'product_name' => 'Samsung m10',
    'colors' => ['Red','Green','Blue']
];

foreach($product as $key => $value) {
    echo $key. ": ";
    print_r($value);
    echo "<br/>";
}