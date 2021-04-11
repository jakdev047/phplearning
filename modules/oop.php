<?php

/* 
    Object-Oriented Programming

    Access Identifier -> public, private, protected
    Constructor -> It allows you to initialize an object's properties upon creation of the object.
    Inheritance -> When a class derives from another class.

*/

echo("OOP of PHP!"."<br/>");

//  class
class Student {
    const GREETINGS_MESSAGE = "Welcome Studen Class";

    // property
    private $id;
    public $name;
    public $roll;
    public $money;

    // method
    public function __construct($name, $roll, $money) {
        $this->name = $name;
        $this->roll = $roll;
        $this->money = $money;
    }
}

// Gurdian is inherited from Student
class Gurdian extends Student {
    // property
    public $fatherName;
    public $occupation;

    // method
    public function __construct($name, $roll, $money,$fatherName,$occupation) {
        $this->name = $name;
        $this->roll = $roll;
        $this->money = $money;
        $this->fatherName = $fatherName;
        $this->occupation = $occupation;
    }
}

$studentObj = new Student('Abdullah',47,500); // instance
$gurdainObj = new Gurdian('Abdullah',47,500,'Abdur Rahim','Businessman'); // instance

// constant 
echo Student::GREETINGS_MESSAGE . "<br/>";
// echo $studentObj->id . "<br/>"; //Error because this property is Private
echo $studentObj->name . "<br/>";
echo $studentObj->roll . "<br/>";
echo $studentObj->money. "<br/>";

echo '<pre>';
print_r($gurdainObj);
echo "<br/>";


// example
class Father {
    // property
    private $money;

    // method
    public function __construct() {
        $this->money = 5000;
    }

    protected function giveMeMoney($amount) {
        $this->money = $this->money - $amount;
        return $amount;
    }
}

class Son extends Father{
    // property
    private $sonMoney = 5;

    public function getMoney() {
        $this->sonMoney = $this->sonMoney + $this->giveMeMoney(45);
        return $this->sonMoney;
    }

}

// instance
$fatherObj = new Father();
$sonObj = new Son();

echo '<pre>';
print_r($fatherObj);


echo $sonObj->getMoney(). "<br/>";

