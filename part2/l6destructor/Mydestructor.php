<?php

// Class Object
class Mydestructor{

    public $num1 = 100;
    private $num2 = 200;
    protected $num3 = 300;

    public $message = "Total result is ";

    // =>Magic Method

    public function __construct(){
        $result = $this->num1+$this->num2+$this->num3;

        echo "$this->message = $result" . "<br/>"; // Total result is = 600
        // echo "{$this->message} = {$result}"; // Total result is = 600
    }

    public function car($brand){
        echo "I bought a new {$brand} car .<br/>";
    }


    // =>Magic Method
    // Note :: Destructor can't set parameter
    public function __destruct(){
        echo "I am start working by automatically after all above !!. hee hee :D ";
    }
}


echo "This is destructor <br/>";

// $obj = new MyConstructor();
// $obj = new MyConstructor("sai sai");
// $obj = new MyConstructor("sai sai",22);

$obj = new Mydestructor();

$obj->car("Toyota");

echo "<hr/>";


?>