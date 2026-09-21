<?php

// Note :: Type hinting is concept that provides hints to function or method for the expected data type of arguments

// Advantages of type hinting
    // helps users debug the code easily or the code provides error specifically.
    // a great concept for static kind of data

// Disadvantages of type hinting
    // function or method only take one type of data
    // the dynamic data or arguments are not there


declare(strict_types=1);
// ini_set('display_error',1);


// Class Object
class Mytypehinting{

    public function getdata($val){
        echo $val. "<br/>";
    }

}


echo "This is Type Hinting <br/>";


$obj1 = new Mytypehinting();
$obj1->getdata("aungaung"); // aungaung
$obj1->getdata("10"); // 10
$obj1->getdata(100); // 100
$obj1->getdata(25.68); // 25.68
$obj1->getdata(true); // 1
// $obj1->getdata(['red','green','blue']); // array format


echo "<hr/>";

class Mytypehinting2{

    public function getdata(string $val){
        echo $val. "<br/>";
    }

}

$obj2 = new Mytypehinting2();
$obj2->getdata("aungaung"); // aungaung
$obj2->getdata("10"); // 10
// $obj2->getdata(100); // 100
// $obj2->getdata(25.68); // 25.68
// $obj2->getdata(true); // 1
// $obj2->getdata(['red','green','blue']); // array format



echo "<hr/>";

class Mytypehinting3{

    public function getdata(int $val){
        echo $val. "<br/>";
    }

}

$obj3 = new Mytypehinting3();
// $obj3->getdata("aungaung"); // aungaung
// $obj3->getdata("10"); // 10
$obj3->getdata(100); // 100
// $obj3->getdata(25.68); // 25.68
// $obj3->getdata(true); // 1
// $obj3->getdata(['red','green','blue']); // array format



echo "<hr/>";

class Mytypehinting4{

    public function getdata(bool $val){
        echo $val. "<br/>";
    }

}

$obj4 = new Mytypehinting4();
// $obj4->getdata("aungaung"); // aungaung
// $obj4->getdata("10"); // 10
// $obj4->getdata(100); // 100
// $obj4->getdata(25.68); // 25.68
$obj4->getdata(true); // 1
// $obj4->getdata(['red','green','blue']); // array format



echo "<hr/>";

class Mytypehinting5{

    public function getdata(float $val){
        echo $val. "<br/>";
    }

}

$obj5 = new Mytypehinting5();
// $obj5->getdata("aungaung"); // aungaung
// $obj5->getdata("10"); // 10
$obj5->getdata(100); // 100
$obj5->getdata(25.68); // 25.68
// $obj5->getdata(true); // 1
// $obj5->getdata(['red','green','blue']); // array format

echo "<hr/>";

class Mytypehinting6{

    public function getdata(array $val){
        echo $val. "<br/>";
    }

}

$obj6 = new Mytypehinting6();
// $obj6->getdata("aungaung"); // aungaung
// $obj6->getdata("10"); // 10
// $obj6->getdata(100); // 100
// $obj6->getdata(25.68); // 25.68
// $obj6->getdata(true); // 1
$obj6->getdata(['red','green','blue']); // array format



echo "<hr/>";


class Mytypehinting7{

    public function total(array $arrs){

        $result = 0;

        foreach($arrs as $arr){
            // result += $arr;

            $result = $result + $arr;

        }

        echo $result;

    }

}

$obj7 = new Mytypehinting7();
$obj7->total([10,20,30,40,50]); //150

echo "<hr/>";


class Phone{

    protected $brand;
    protected $hasfacesensor;
    protected $numberofsim;
    protected $price;

    public function setbrand(string $value){
        $this->brand = $value;
    }

    public function sethasfacesensor(bool $value){
        $this->hasfacesensor = $value;
    }

    public function setnumberofsim(int $value){
        $this->numberofsim = $value;
    }

    public function setprice(float $value){
        $this->price = $value;
    }

    public function getinfo(){
        echo "Brand name is = $this->brand <br/> Face Sensor = $this->hasfacesensor <br/> Number of SIM = $this->numberofsim <br/> Price = $this->price <br/>";
    }
}

$objphone = new Phone();
$objphone->setbrand("iphone");
$objphone->sethasfacesensor(true);
$objphone->setnumberofsim(2);
$objphone->setprice(999.68);

$objphone->getinfo();











echo "<hr/>";



?>