<?php

/* 
    Condition

    if
    else if
    else
    switch
    turnary operator

*/

echo("Condition of PHP!"."<br/>");

// switch
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
