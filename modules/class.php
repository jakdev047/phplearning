<?php

/* 
    Class

*/

// echo("Class of PHP!"."<br/>");

class Calculator {
    // property
    public $a;
    public $b;
    public $operator;

    // method
    public function __construct($a=0,$b=0) {
        $this->a = $a;
        $this->b = $b;
    }

    public function setData($postData) {

        if(isset($postData['number1'])) {
            $this->a = $postData['number1'];
        }

        if(isset($postData['number2'])) {
            $this->b = $postData['number2'];
        }

        if(isset($postData['operator'])) {
            $this->operator = $postData['operator'];
        }
    }

    public function add(){
        $result = $this->a + $this->b;
        return $result;
    }

    public function sum(){
        return $this->a + $this->b;
    }

    public function substract(){
        return $this->a - $this->b;
    }

    public function calculate(){
        switch($this->operator) {
            case $this->operator == '+':
                $result = $this->sum($this->a,$this->b);
                break;
            case $this->operator == '-':
                    $result = $this->substract($this->a,$this->b);
                    break;
            default:
                $result = 0;
                break;
        }

        return $result;
    }

    public function __destruct(){
        echo "Destruct";
    }
}
