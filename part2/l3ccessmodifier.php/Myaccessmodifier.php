<?php

// Class Object
class Myaccessmodifier{

    // Access Modifier
        // public = anyone can access
        // private = only access inside main class
        // protected = subclass / Extended class

    public $companyname = "data land technology";
    var $personname = "Mr.sai";

    private $jobtitle = "Manager"; // cannot print from outside
    protected $location = "Yangon"; // cannot print from outside

    public function getinfo(){

        $num = 10;
        echo $num;

        // echo $companyname; // can't print
        // echo $personname; // can't print

        // echo $jobtitle; // can't print
        // echo $location; // can't print

    }

}
$obj = new Myaccessmodifier();

echo "This is Access Modifier <br/>";

echo $obj->companyname . "<br/>"; // data land technology

echo $obj->personname . "<br/>"; // Mr.sai

$obj->getinfo(); // 10

echo "<hr/>";

$obj->companyname = "ABC Co.,Ltd";
echo $obj->companyname . "<br/>"; // ABC Co.,Ltd

$obj->personname = "Ko Sai";
echo $obj->personname . "<br/>"; // Ko Sai

echo "<hr/>";

// $obj->jobtitle;

echo "<hr/>";






?>