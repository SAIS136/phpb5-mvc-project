<?php

// Same Method name has different implementation of that method

// Class Object
class Language{

    public $name;
    public $citizen;

    public function __construct($val1,$val2){
        $this->name = $val1;
        $this->citizen = $val2;
    }

    public function speak(){
        echo "Say Something... <br/>";
    }

}

class Burmese extends Language{

    public function speak(){
        echo "Hello Mingalapar... <br/>";
    }

}

class Thai extends Language{

    public function speak(){
        echo "Hello Sawadikap... <br/>";
    }

}




echo "This is Polymorphism <br/>";


$obj1 = new Burmese('Hsu Hsu','Burmese');
echo $obj1->name; // Hsu Hsu
echo "<br/>";
echo $obj1->citizen; // Burmese
echo "<br/>";
$obj1->speak(); // Hello Mingalapar...

echo "<hr/>";

$obj1 = new Thai('Mya Mya','Thai');
echo $obj1->name; // Mya Mya
echo "<br/>";
echo $obj1->citizen; // Thai
echo "<br/>";
$obj1->speak(); // Hello Sawadikap...



echo "<hr/>";



?>