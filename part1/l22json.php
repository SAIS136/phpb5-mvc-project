<?php

// json_encode(array);

// json_decode(array);
// json_decode(array,true/associative);


$colors = ["red","green","blue"];
// echo $colors; //Warning: Array to string conversion
var_dump($colors); // array(3) { [0]=> string(3) "red" [1]=> string(5) "green" [2]=> string(4) "blue" }

$mycolors = json_encode($colors);
echo $mycolors; // ["red","green","blue"]
var_dump($mycolors); // string(22) "["red","green","blue"]"



$students = ["name"=>"aung aung","age"=>25,"city"=>"yangon"];
var_dump($students); // array(3) { ["name"]=> string(9) "aung aung" ["age"]=> int(25) ["city"]=> string(6) "yangon" }
echo $students["name"];
echo $students["age"];
echo $students["city"];

$studentinfos = json_encode($students);
echo $studentinfos; // {"name":"aung aung","age":25,"city":"yangon"}
var_dump($studentinfos); // string(45) "{"name":"aung aung","age":25,"city":"yangon"}"

// can't print
// echo $studentinfos["name"];
// echo $studentinfos["age"];
// echo $studentinfos["city"];



// => Decode by single parameter

$studentdatas = '{"name":"aung aung","age":25,"city":"yangon"}';
$studentdecode = json_decode($studentdatas);
var_dump($studentdecode); // object(stdClass)#1 (3) { ["name"]=> string(9) "aung aung" ["age"]=> int(25) ["city"]=> string(6) "yangon" }
// can't print
// echo $studentinfos["name"];
// echo $studentinfos["age"];
// echo $studentinfos["city"];

// can print (object(stdClass) (-> object operator))
echo $studentdecode->name;
echo $studentdecode->age;
echo $studentdecode->city;

foreach($studentdecode as $key=>$value){
    echo $key . " is " . $value . "<br/>";
}



// => Decode by multi parameter


$staffdatas = '{"name":"aung aung","age":25,"city":"yangon"}';
$staffdecode = json_decode($staffdatas,true);
var_dump($staffdecode); // array(3) { ["name"]=> string(9) "aung aung" ["age"]=> int(25) ["city"]=> string(6) "yangon" }

// can print
echo $staffdecode["name"];
echo $staffdecode["age"];
echo $staffdecode["city"];

// can't print
// echo $staffdecode->name;
// echo $staffdecode->age;
// echo $staffdecode->city;






?>