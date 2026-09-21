<?php


class Myclone{

    public function project($name){
        echo "I created a new ${name} project. <br/>";
    }

    public function task(){
        echo "I am new task. <br/>";
    }

    public function __call($method,$vals){
        echo "You not yet define these \"${method}\" non-static method . so your value are = "."<pre>".print_r($vals,true)."</pre>"." are here <br/>";
    }

    public static function exam(){
        echo "i am new exam <br/>";
    }

    public static function __callstatic($method,$vals){
        echo "You not yet define these \"${method}\" non-static method . so your value are = "."<pre>".print_r($vals,true)."</pre>"." are here <br/>";
    }


}


echo "This is Clone <br/>";

$obj1 = new Myclone();
$obj1->project("POS"); // I created a new POS project.
$obj1->project("Book Shop"); // I created a new Book Shop project.

$obj2 = $obj1; // Copy by Reference
$obj2->project("CMS"); // I created a new CMS project.

$obj3 = clone $obj1; // Cloning
$obj3->project("E-wallet"); // I created a new E-wallet project.

echo "<hr/>";

    if(method_exists('Myclone','task')){
        $obj1->task();
    }else{
        echo "No method exists";
    }

    if(method_exists($obj1,'task')){
        $obj1->task();
    }else{
        echo "No method exists";
    }

    if(method_exists(new Myclone(),'exam')){
        $obj1::exam();
    }else{
        echo "No method exists";
    }

    if(method_exists($obj2,'exam')){
        $obj2::exam();
    }else{
        echo "No method exists";
    }

    if(method_exists($obj3,'exam')){
        $obj3::exam();
    }else{
        echo "No method exists";
    }









echo "<hr/>";



?>