<?php

// Note :: void is a return-only  for type declaration indication assign . the function does not return a value .  void available for php 7.1 to above

class Returntypehinting{

    public $name;

    public function setname(string $val):void{
        $this->name = $val;
    }

    public function getname():string{
        return $this->name;
    }

}

class person extends Returntypehinting{
    public $userid;
    public $username;

    function setinfo(array $arr):void{
        $this->userid = $arr['id'];
        $this->username = $arr['name'];
    }
}

echo "This is Return Type Hinting <br/>";

$obj1 = new Returntypehinting();
$obj1->setname("Hsu Hsu");
echo $obj1->getname(); // Hsu Hsu

echo "<br/>";

$obj2 = new Person();
$obj2->setname("Nu Nu");
echo $obj2->getname(); // Nu Nu

echo "<br/>";

$datas = ["id"=>1,"name"=>"Yu Yu"];
$obj2->setinfo($datas);

echo $obj2->userid; // 1
echo $obj2->username; // Yu Yu





echo "<hr/>";







?>