<?php

// Class Object
class MyConstructor{

    public $num1 = 100;
    private $num2 = 200;
    protected $num3 = 300;

    public $message = "Total result is ";

    // =>Magic Method
    // public function __construct(){
    //     echo "I am start working by automatically !!. hee hee :D ";
    // }

    // public function __construct($name){
    //     echo "I am {$name}.I am start working by automatically !!. hee hee :D ";
    // }

    // public function __construct($name,$old){
    //     echo "I am {$name} {$old} years old.I am start working by automatically !!. hee hee :D ";
    // }

    public function __construct(){
        $result = $this->num1+$this->num2+$this->num3;

        echo "$this->message = $result"; // Total result is = 600
        // echo "{$this->message} = {$result}"; // Total result is = 600
    }
}


echo "This is Constructor <br/>";

// $obj = new MyConstructor();
// $obj = new MyConstructor("sai sai");
// $obj = new MyConstructor("sai sai",22);

$obj = new MyConstructor();

echo "<hr/>";


?>