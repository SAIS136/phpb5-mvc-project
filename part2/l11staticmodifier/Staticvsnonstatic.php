<?php


class Staticvsnonstatic{

    // Member variables

    // Non-static property
    public $fullname = "Hsu Hsu";

    // Static property
    public static $city = "Yangon";

    // Constant
    const GENDER = "Female";

    // Member Methods
    // non-static method can call static property and non-static property
    // non-static method can call static method and non-static method


    // static method can not call non-static property but constant can call
    // static method can not call non-static method


    // Non-static method

    public function getname(){
        echo "I am Non-static method <br/>";

        echo "Name is $this->fullname <br/>";
    }

    public function getcity(){
        echo "I am Non-static method <br/>";

        echo "City is". self::$city . "<br/>";
    }

    public function getgender(){
        echo "I am Non-static method <br/>";

        echo "Gender is". self::GENDER . "<br/>";
    }



    // static method
    public static function getstaticcity(){
        echo "I am static method <br/>";

        echo "City is ". self::$city ." & hometown is " . static::$city . "<br/>";
    }

    public static function getstaticgender(){
        echo "I am static method <br/>";

        echo "Gender is". self::GENDER . "<br/>";
    }

    public function car(){
        echo "I am Non-static method <br/>";

        $brand = self::carbrand();
        echo "I bought a new ${brand} car. <br/>";
    }

    public static function carbrand(){
        return "Toyota LEXUS LX570";
    }


    public function mobilebrand(){
        return "iPhone 16 Pro Max ";
    }

    public function beforebuy(){
        echo "I am Non-static method <br/>";

        $brand = $this->mobilebrand();
        echo "I am thinking about to buy a new ${brand} . <br/>";
    }

}


echo "This is Static vs Non-static Modifier";

$obj = new Staticvsnonstatic();
echo $obj->fullname; // Hsu Hsu
echo "<br/>";

echo $obj::$city; // Yangon
echo "<br/>";
echo Staticvsnonstatic::$city; // Yangon
echo "<br/>";

echo $obj::GENDER; // Female
echo "<br/>";
echo Staticvsnonstatic::GENDER; // Female
echo "<br/>";

    // Non-static method
$obj->getname(); // Name is Hsu Hsu
$obj->getcity(); // City isYangon
$obj->getgender(); // Gender isFemale

// static method
$obj::getstaticcity(); // City is Yangon & hometown is Yangon
$obj::getstaticgender(); // Gender isFemale

Staticvsnonstatic::getstaticcity(); // City is Yangon & hometown is Yangon
Staticvsnonstatic::getstaticgender(); // Gender isFemale

echo "<hr/>";

$obj->car(); // I bought a new Toyota LEXUS LX570 car.

$obj->beforebuy(); // 

echo "<hr/>";




?>