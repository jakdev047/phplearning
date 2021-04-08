<?php

/* 
    super global variable of PHP

    $GLOBALS -> It is used to access global variables from anywhere in the PHP script
    $_SERVER -> It holds information about headers, paths, and script locations.
    $_REQUEST -> it is used to collect data after submitting an HTML form.
    $_POST -> it is used to collect form data after submitting an HTML form with method="post".
    $_GET -> it is used to collect form data after submitting an HTML form with method="get".
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION -> To store information (in variables) to be used across multiple pages.

*/

echo("Super Global Variable of PHP!"."<br/>");

// $GLOBALS
$GLOBALS['a'] = 10;
$GLOBALS['b'] = 10;

function add() {
    $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
    echo("Value of GLOBALS['c'] = ".$GLOBALS['c']."<br/>");
}

add();

// $_SESSION
session_start();
$_SESSION['name'] = 'Jubayer';
print_r($_SESSION);

// $_SERVER
echo '<pre>';
print_r($_SERVER);
