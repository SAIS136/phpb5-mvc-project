<?php

// Class Object
class Mymethods{

    // Access Modifier
        // public = anyone can access
        // private = only access inside main class
        // protected = subclass / Extended class

    // Class Method / Method
    public function greeting(){
        echo "Have a good day";
    }

    public function calculate($num){
        echo "Getting calculate number is = {$num} </br>";
    }

    public function result($num=1){
        echo "Getting result number is = {$num} </br>";
    }

}
$obj = new Mymethods();

echo "This is Method <br/>";

$obj->greeting();

// $obj->greeting(); // *no action

$obj->calculate(150); // Getting calculate number is = 150

$obj->result(); // Getting result number is = 1
$obj->result(100); // Getting result number is = 100





?>