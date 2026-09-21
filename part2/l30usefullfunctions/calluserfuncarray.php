<?php


ini_set('dispaly_error',1);

echo "This is call_user_func_array(). <br/>";
// call_user_func_array(callback,array)

function funone($num1,$num2){
    echo __FUNCTION__ , " values are {$num1} and {$num2} <br/>";
}

funone(10,20); // funone values are 10 and 20

call_user_func_array("funone",[100,200]); // funone values are 100 and 200
call_user_func_array("funone",array(100,200)); // funone values are 100 and 200


class Hifi{
    function funtwo($num1,$num2){
        echo __METHOD__, " values are {$num1} and {$num2} <br/> ";
    }
}

$obj = new Hifi();
$obj->funtwo(300,400); // Hifi::funtwo values are 300 and 400

// call_user_func_array([callback,array],array)
call_user_func_array([$obj,"funtwo"],[300,400]); // Hifi::funtwo values are 300 and 400
call_user_func_array([$obj,"funtwo"],array(300,400)); // Hifi::funtwo values are 300 and 400








?>