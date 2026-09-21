<?php


// Class Object
class Magicmethods{

    public $num;
    private $name;
    protected $age;

    public function __construct($val){

        // property_exists(classname,property by string)

        // if(property_exists('Magicmethods','num')){
        //     echo $this->num = $val;
        // }else{
        //     echo "Property doesn't exists.";
        // }

        if(property_exists($this,'num')){
            echo $this->num = $val;
        }else{
            echo "Property doesn't exists.";
        }



    }


}

class Mymagicone{

    public $greeting = 'hello';

    public function __get($var){
        echo "You not yet defined this \"${var}\" property. <br/>";
    }

    public function __set($var,$val){
        echo "You not yet defined this \"${var}\" property. so your value \"${val}\" is cannot set <br/>";
    }
}

class Mymagictwo{

    public function sayhi(){
        echo "Hello i am sayhi non-static method <br/>";
    }

      public static function saybye(){
        echo "Hello i am saybye static method <br/>";
    }

    // for non static method
    public function __call($method,$vals){
        echo "You not yet defined this \"${method}\" non-static method."."<pre>".print_r($vals,true)."</pre>";
    }

    // for static method
    public static function __callstatic($method,$vals){
        echo "You not yet defined this \"${method}\" non-static method."."<pre>".print_r($vals,true)."</pre>";
    }
}

class Mymagicthree{

    public function __invoke(){
        echo "Hello sir, i am working cuz your trying to print out your class object as method.";
    }
}

class Mymagicfour{

    public function __toString(){
        return "Hello sir, i am working cuz your trying to print out your class object.";
    }
}

echo "This is Magic Method <br/>";


$obj1 = new Magicmethods(100);

echo "<hr/>";

$obj1 = new Mymagicone();
echo $obj1->greeting; // hello
echo "<br/>";
echo $obj1->hay; // You not yet defined this "hay" property.
echo $obj1->byebye = "goodbye"; // You not yet defined this "byebye" property. so your value "goodbye" is cannot set

echo "<hr/>";

$obj2 = new Mymagictwo();
$obj2->sayhi(); // Hello i am sayhi non-static method
$obj2::saybye(); // Hello i am saybye static method

$obj2->sayhifi(); // You not yet defined this "sayhifi" non-static method. with array values
$obj2->sayhifi('greeting'); // You not yet defined this "sayhifi" non-static method. with array values
$obj2->sayhifi('greeting','bye bye'); //  You not yet defined this "sayhifi" non-static method. with array values

echo "<hr/>";

$obj2::sayhello(); // You not yet defined this "sayhello" non-static method. with array method
$obj2::sayhello('greeting'); // You not yet defined this "sayhello" non-static method. with array method
$obj2::sayhello('greeting','bye bye'); // You not yet defined this "sayhello" non-static method. with array method

echo "<hr/>";

$obj3 = new Mymagicthree();
$obj3(); // Hello sir, i am working cuz your trying to print out your class object as method.

echo "<hr/>";

$obj4 = new Mymagicfour();
echo $obj4; // Hello sir, i am working cuz your trying to print out your class object as method.

echo "<hr/>";



?>