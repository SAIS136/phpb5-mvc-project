<?php

// Properties and Methods Visiability

// Visiability              Availability
// public                      Anywhere : inside other classes and object instances
// protected                   Inside the current class and any sub classes
// private                     Inside the current class only


class Classconstant{

    const NAME = "hsu hsu";
    public const CITY = "Yangon";
    protected const EMAIL = "hsuhsu@gmail.com";
    private const PASSWORD = "123456789";

    public function getinfo(){
        echo "Name is ". self::NAME . " & she live in ". self::CITY . "<br/>";
    }

    public function getaccess(){
        echo "Email is ". self::EMAIL . " & password is". self::PASSWORD . "<br/>";
    }

}

class Kid1 extends Classconstant{

}

class Kid2 extends Classconstant{

    public function getcontent(){
        echo "Name is ". self::NAME . " & she live in ". self::CITY . "<br/>";
    }

    public function getemail(){
        echo "Email is ". self::EMAIL . "<br/>";
    }

    // public function getpassword(){
    //     echo "Password is ". self::PASSWORD . "<br/>";
    // }
}

echo "This is Class Content. <br/>";

$obj = new Classconstant();
echo $obj::NAME ."<br/>"; // hus hsu
echo Classconstant::CITY ."<br/>"; // Yangon

// echo $obj::EMAIL ."<br/>"; // error it is protected
// echo Classconstant::PASSWORD ."<br/>"; // error it is private

$obj->getinfo(); // Name is hsu hsu & she live in Yangon
$obj->getaccess(); // Email is hsuhsu@gmail.com & password is123456789

echo "<hr/>";

$kk1 = new Kid1();
echo $kk1::NAME ."<br/>"; // hus hsu
echo Kid1::CITY ."<br/>"; // Yangon

// echo $kk1::EMAIL ."<br/>"; // error it is protected
// echo Kid1::PASSWORD ."<br/>"; // error it is private

$kk1->getinfo(); // Name is hsu hsu & she live in Yangon
$kk1->getaccess(); // Email is hsuhsu@gmail.com & password is123456789


echo "<hr/>";

$kk2 = new Kid2();
echo $kk2::NAME ."<br/>"; // hus hsu
echo Kid2::CITY ."<br/>"; // Yangon

// echo $kk1::EMAIL ."<br/>"; // error it is protected
// echo Kid1::PASSWORD ."<br/>"; // error it is private

$kk2->getinfo(); // Name is hsu hsu & she live in Yangon
$kk2->getaccess(); // Email is hsuhsu@gmail.com & password is123456789

$kk2->getemail(); // Email is hsuhsu@gmail.com
// $kk2->getpassword(); // error it is private



echo "<hr/>";


?>