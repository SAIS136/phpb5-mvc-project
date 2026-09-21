<?php

// => Data Binding
    // (i) Static Binding (or) Early binding
    // (ii) Dynamic Binding (or) Late binding (or) late static binding

        // (i) Static Binding (or) Early binding
                // compile time (self keyword)

                // Binding everything before program running
                // index.php > Compile > Execute
                // echo 1+1    10101110    2
                // echo 1+1    10101110    2
                // echo 1+1    10101110    2


        // (ii) Dynamic Binding (or) Late binding (or) late static binding
                // run time (static)
                // index.php > Transpile > Execute
                // echo 1+1    10101110        2


// Class Object
class hola1{

    public $name = "Ko Ko";

    public function friend(){
        return "My best friend name is ". $this->name . "<br/>";
    }

    public function getfriend(){
        echo $this->friend();
    }

}

class hola2 extends hola1{

    public function friend(){
        return "My best friend name is ". $this->name . "and Hsu Hsu <br/>";
    }
}



echo "This is Binding <br/>";


$obj1 = new hola1();
echo $obj1->friend(); // My best friend name is Ko Ko
$obj1->getfriend(); // My best friend name is Ko Ko



$obj2 = new hola2();
echo $obj2->friend(); // My best friend name is Ko Koand Hsu Hsu
$obj2->getfriend(); // My best friend name is Ko Koand Hsu Hsu

echo "<hr/>";

class hola3{
    public static $name = "Ko Ko";

    public static function friend(){
        return "My best friend name is ". self::$name. "<br/>";
    }

    public static function getfriend(){
        echo self::friend();
    }

}

class hola4 extends hola3{

    public static function friend(){
        return "My best friend name is ". self::$name. " and yu yu <br/>";
    }

}

$obj3 = new hola3();
echo $obj3::friend(); // My best friend name is Ko Ko
$obj3::getfriend(); // My best friend name is Ko Ko


$obj4 = new hola4();
echo $obj4::friend(); // My best friend name is Ko Ko and yu yu
$obj4::getfriend(); // My best friend name is Ko Ko


echo "<hr/>";



?>