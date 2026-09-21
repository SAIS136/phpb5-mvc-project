<?php

abstract class Vehicle{
    abstract public function start();
    abstract public function stop();
}

class Car extends Vehicle{

    public function start(){
        echo "Car started <br/>";
    }

    public function stop(){
        echo "Car Stopped <br/>";
    }

}

class Ebike extends Vehicle{

    public function start(){
        echo "Ebike started <br/>";
    }

    public function stop(){
        echo "Ebike Stopped <br/>";
    }

}




echo "This is Polymorphism Concept with abstract <br/>";


$obj1 = new Car();
$obj1->start(); // Car started
$obj1->stop(); // Car Stopped


echo "<hr/>";

$obj1 = new Ebike();
$obj1->start(); // Ebike started
$obj1->stop(); // Ebike Stopped



echo "<hr/>";



?>