<?php


class Lady{

    public $name = "Hsu Hsu";

    public function friend(){
        return "My friend name is $this->name <br/>";
    }

}

function showresult(Lady $val){
    echo $val->friend();
}



echo "This is Object Type Hinting <br/>";

$obj1 = new Lady();
showresult($obj1);

showresult(new Lady());

echo "<hr/>";

class Brand{
    public function getjpnbrand(){
        return "Toyota Brand <br/>";
    }

    public function getchinabrand(){
        return "BYD Brand <br/>";
    }
}

class Car{

    public function getbrand(Brand $val){
        return $val;
    }

    public function getjpn(Brand $val){
        return $val->getjpnbrand();
    }

    public function getchn(Brand $val){
        return $val->getchinabrand();
    }

}


$objbrand = new Brand();
$objcar = new Car();

echo $objcar->getbrand($objbrand)->getjpnbrand();
echo $objcar->getbrand($objbrand)->getchinabrand();

echo $objcar->getjpn($objbrand);
echo $objcar->getchn($objbrand);



echo "<hr/>";






?>