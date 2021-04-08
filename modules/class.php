<?php

/* 
    Class

*/

echo("Class of PHP!"."<br/>");

class Calculator {
    // property
    public $a;
    public $b;

    // method
    public function __construct($a,$b) {
        $this->a = $a;
        $this->b = $b;
    }

    public function add(){
        $result = $this->a + $this->b;
        return $result;
    }

    public function __destruct(){
        echo "Destruct";
    }
}
