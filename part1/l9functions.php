<?php

// User Defined Function

// function name(){
//     code to be executed;
// }

// ----------------

// Parameter Function (or) Arguments Functions
// (i) Single
// (ii) Multi

// function name($arg1){
//     code to be executed;
// }


// function name($arg1,$arg2){
//     code to be executed;
// }

// ----------------

// Default Parameter Function (or) Default Arguments Function

// function name($name="aung aung",$age="20"){
//     code to be executed;
// }

// ----------------

function myfun(){
    echo "my name is mr.tin";
}

myfun();
myfun();


function myfun1(){
    $num1 = 10;
    $num2 = 20;
    $cal = $num1+$num2;
    echo $cal;
}

myfun1(); // 30

// ----------------

function singlefun($name){
    echo "My name is $name";
}

singlefun("aung aung");
singlefun("Hsu Hsu");

// ----------------

function multifun($name,$age){
    echo "My name is $name and i am {$age} years old.";
}

multifun("Kyaw aung",20);
multifun("nandar",30);

// ----------------

function defaultfun($name="Hla Hla"){
    echo "My name is ${name}.";
}

defaultfun(); // My name is Hla Hla
defaultfun("aye aye"); // My name is aye aye

// ----------------

function defaultfun1($num1=10,$num2=20,$num3=30){
    $cal = $num1+$num2+$num3;
    echo $cal;
}

defaultfun1(); // 60
defaultfun1(50,10); // 90
defaultfun1(70,5,15); // 90

// ----------------

// Return

function myreturn($num1){
    $cal = $num1+10;
    return $cal;
}

echo myreturn(50); // 60


function myreturn1($num1){
    return $cal = $num1+10;
}

echo myreturn1(100); // 110


function myreturn2($num1,$num2,$num3){
    $cal = $num1+$num2+$num3;
    return $cal;
}

echo myreturn2(10,20,30); // 60


function myreturn3($num1=10,$num2=20,$num3=30){
    $cal = $num1+$num2+$num3;
    return $cal;
}

echo myreturn3(50); // 110
echo myreturn3(); // 60


// => Dynamic Function Call

$dyn1 = myreturn(100);
echo $dyn1; // 110

$dyn2 = myreturn3();
echo $dyn2; // 60

$dyn3 = "myreturn1";
echo $dyn3; // myreturn1
echo $dyn3(100); // 110

$myfun = "myreturn3"
echo $myfun; // 60

if(function_exists(myfun)){
    echo "Yes, your variable value is already in some kind of function."
}else{
    echo "No";
}

?>