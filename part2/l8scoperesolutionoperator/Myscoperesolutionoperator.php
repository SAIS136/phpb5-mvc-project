<?php

// Parent Class / Main Class / Super Class

// Note :: define() not working in class method

class Myscoperesolutionoperator{

    // Member Constant Variables
    const GREETING = "Hello Friend. Good Evening from Thailand.";
    const THANKS = 'Hi Friend. Thanks for visiting our country.';

    public $fullname = "Aung Kyaw Kyaw";

    // Member Methods

    public function sayhifi(){
        echo self::GREETING;
    }

    public function saybye(){
        echo static::THANKS;
    }

    public function __construct(){
        echo "I am start working by automatically from Main Class <br/>";
    }

}

class Child1 extends Myscoperesolutionoperator{

}

class Child2 extends Myscoperesolutionoperator{

    const GREETING = "Hello Student. Good Morning from Myanmar.";
    const THANKS = 'Hi Student. See u again.';


    public function sayhifi(){
        echo self::GREETING;
    }

    public function saybye(){
        echo static::THANKS;
    }

    public function sayhello(){
        echo self::GREETING;
    }

    public function sayseeu(){
        echo static::THANKS;
    }
}

class Child3 extends Myscoperesolutionoperator{

    public function __construct(){
        parent::__construct();
        // parent::sayhifi();
        echo "I am start working by automatically from Sub Class <br/>";
    }
}

echo "This is Scope Resolution Operator <br/>";

$obj = new Myscoperesolutionoperator();
echo $obj->fullname. "<br/>";
echo $obj::GREETING . "<br/>"; // sro
echo "<br/>";
echo Myscoperesolutionoperator::GREETING; // Hello Friend. Good Evening from Thailand.

$obj->sayhifi(); // Hello Friend. Good Evening from Thailand.
echo "<br/>";
$obj->saybye(); // Hi Friend. Thanks for visiting our country.

echo "<hr/>";

$ch1 = new Child1();
echo $ch1->fullname. "<br/>"; // Aung Kyaw Kyaw
echo $ch1::GREETING . "<br/>"; // Hello Friend. Good Evening from Thailand.
echo "<br/>";
echo Child1::GREETING; //Hello Friend. Good Evening from Thailand.

$ch1->sayhifi(); // Hello Friend. Good Evening from Thailand.
echo "<br/>";
$ch1->saybye(); // Hi Friend. Thanks for visiting our country.

echo "<hr/>";

$ch2 = new Child2();
echo $ch2->fullname. "<br/>"; // Aung Kyaw Kyaw
echo $ch2::GREETING . "<br/>"; //Hello Student. Good Morning from Myanmar.
echo Child2::GREETING . "<br/>"; // Hello Student. Good Morning from Myanmar.

$ch2->sayhifi(); // Hello Student. Good Morning from Myanmar. self
echo "<br/>";
$ch2->saybye(); // Hi Student. See u again. static
echo "<br/>";
$ch2->sayhello(); // Hello Student. Good Morning from Myanmar.
echo "<br/>";
$ch2->sayseeu(); // Hi Student. See u again. static
echo "<br/>";

echo "<hr/>";
echo "<hr/>";

$ch3 = new Child3(); // I am start working by automatically from Sub Class
echo $ch3->fullname. "<br/>"; // Aung Kyaw Kyaw
echo $ch3::GREETING . "<br/>"; //Hello Student. Good Morning from Thailand.
echo Child3::GREETING . "<br/>"; // Hello Student. Good Morning from Thailand.

$obj->sayhifi(); // Hello Friend. Good Evening from Thailand.
echo "<br/>";
$obj->saybye(); // Hi Friend. Thanks for visiting our country.


echo "<hr/>";




?>