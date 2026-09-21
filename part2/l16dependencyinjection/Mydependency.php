<?php

ini_set('display_errors',1);

class Course{
    public $courseidx;

    public function __construct($val){
        $this->courseidx = $val;
    }

    public function getcourseidx(){
        echo "Course Idx is = ". $this->courseidx . "<br/>";
    }

}

class Lesson extends Course{

    public $lessonidx;

    public function __construct($val){
        $this->lessonidx = $val;
    }

    public function getlessonidx(){
        echo "Lesson Idx is = ". $this->lessonidx . "<br/>";
    }

}


echo "This is Dependency Injection. <br/>";

$getcourse = new Course(1);
$getcourse->getcourseidx(); // Course Idx is = 1

$getlesson = new Lesson(20);
$getlesson->getlessonidx(); // Lesson Idx is = 20

$getlesson->getcourseidx(); // Course Idx is =

// $getcourse->getlessonidx(); // error

echo "<hr/>";

// => Parent to Child

class Vehicle{

    public $modelnumber;
    public $evcarobj;
    public $carmodeobj;

    public function __construct($val,$price,$type){
        $this->modelnumber = $val;
        $this->evcarobj = new Evcar($price);
        $this->carmodeobj = new Carmode($type);
    }

    public function getmodelnumber(){
        echo "Vehicle Model Number is = ".$this->modelnumber. "<br/>";
    }

}

class Evcar extends Vehicle{

    public $price;

    public function __construct( $price ){
        $this->price = $price;
    }

    public function getprice(){
        echo "EV Car Price is = ". $this->price . "<br/>";
    }


}

class Carmode extends Vehicle{

    public $type;

    public function __construct( $type ){
        $this->type = $type;
    }

    public function gettype(){
        echo "Car Type is = ". $this->type . "<br/>";
    }


}

$getvehicle = new Vehicle(1111,200000,"Luxury");
$getvehicle->getmodelnumber(); // Vehicle Model Number is = 1111

$getevcar = new Evcar(300000);
$getevcar->getprice(); // EV Car Price is = 300000

$getevcar = new Carmode('jong jong');
$getevcar->gettype(); // Car Type is = jong jong


$getvehicle->evcarobj->getprice(); // EV Car Price is = 200000
$getvehicle->carmodeobj->gettype(); // Car Type is = Luxury

echo "<hr/>";

// => Child to Parent

class Phone{

    public $brand;

    public function __construct($val){
        $this->brand = $val;
    }

    public function getbrand(){
        return "Phone brand is = ". $this->brand . "<br/>";
    }

}

class Phonemodel extends Phone{

    public $price;

    public function __construct($val,Phone $phone){
        $this->price = $val;
        $this->brand = $phone->getbrand();
    }

    public function getprice(){
        echo "Price is = ". $this->price . "<br/>";
    }

}

$phoneobj = new Phone("iPhone");
echo $phoneobj->getbrand(); // Phone brand is = iPhone

$phonemodelobj = new Phonemodel(500,$phoneobj);
$phonemodelobj->getprice(); // Price is = 500

// Passing by properties
echo $phonemodelobj->getbrand(); // Phone brand is = Phone brand is = iPhone
echo $phonemodelobj->brand; // Phone brand is = iPhone




echo "<hr/>";

?>