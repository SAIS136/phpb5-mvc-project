<?php

// Class Object
class Thiskeyword{

    // Access Modifier
        // public = anyone can access
        // private = only access inside main class
        // protected = subclass / Extended class

    public $companyname = "data land technology"; // can access anywhere
    private $jobtitle = "Manager"; // can't access from outside
    protected $location = "Yangon"; // can't access from outside

    public function getinfo(){

        $num = 10;
        echo $num;

        echo $this->companyname;
        echo $this->jobtitle;
        echo $this->location;


    }

    public function getcompanyname(){
        echo $this->companyname; // data land technology
        echo "<br/>";

        $this->companyname = "ABC Co.,Ltd";
        echo $this->companyname; // "ABC Co.,Ltd

        $this->jobtitle = "Director";
        echo $this->jobtitle; // Director

        $this->location = "Mawlamyine";
        echo $this->location; // Mawlamyine


    }

}

class Vehicle{

    public $brand = "Toyota";

    public function getbrandname(){
        return $this->brand;
    }

    public function setbrandname($name){
        $this->brand = $name;
    }
}


$obj = new Thiskeyword();

echo "This is This Keyword <br/>";

echo $obj->companyname . "<br/>"; //

$obj->getinfo(); // 10data land technology Manager
echo "<br/>";

$obj->getcompanyname(); // data land technology

echo "<br/>";
echo $obj->companyname; // "ABC Co.,Ltd
// echo $obj->jobtitle; // error
// echo $obj->location; // error

echo "<hr/>";

$obj2 = new Vehicle();
echo $obj2->brand . "<br/>"; // Toyota
echo $obj2->getbrandname(); // Toyota
echo $obj2->setbrandname("Suzuki");
echo "<br/>";
echo $obj2->getbrandname(); // Suzuki
echo "<br/>";
echo $obj2->setbrandname("Mazdda");
echo $obj2->getbrandname(); // Mazdda
echo "<hr/>";





?>