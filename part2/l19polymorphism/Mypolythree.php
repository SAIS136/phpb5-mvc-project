<?php

interface Greeting{
    public function speak();
}

class Myanmar implements Greeting{

    public function speak(){
        return "Mingalapar! <br/>";
    }

}

class Thailand implements Greeting{

    public function speak(){
        return "Sawadai! <br/>";
    }

}

class English implements Greeting{

    public function speak(){
        return "Hello! <br/>";
    }

}

function results($objs){

    foreach($objs as $obj){
        echo $obj->speak()."<br/>";
    }

}




echo "This is Polymorphism Concept with interface <br/>";

$datas = [
    new Myanmar(),
    new Thailand(),
    new English()
];

results($datas);


echo "<hr/>";



echo "<hr/>";



?>