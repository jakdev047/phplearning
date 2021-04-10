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

    public function add(){
        $result = $this->a + $this->b;
        return $result;
    }

    public function sum($a=0,$b=0){
        $result = $a + $b;
        return $result;
    }

    public function substract($a=0,$b=0){
        $result = $a - $b;
        return $result;
    }

    public function setData($postData) {
        if(!empty($postData['number1']) && !empty($postData['number2'])  && !empty($postData['operator']) ) {
            $this->a = $postData['number1'];
            $this->b = $postData['number2'];
            $this->operator = $postData['operator'];
        }
    }

    public function calculate(){
        if ($this->operator  == '+') {
            $result = $this->sum($this->a,$this->b);
        }
        elseif ($this->operator  == '-') {
            $result = $this->substract($this->a,$this->b);
        }
        else {
            $result = 0;
        }
        return $result;
    }

    public function __destruct(){
        echo "Destruct";
    }
}
