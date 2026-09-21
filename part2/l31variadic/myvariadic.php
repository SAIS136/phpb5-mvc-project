<?php


ini_set('display_errors',1);

echo "This is Variadic Function. <br/>";

// (...) Spread Operator (used in javascript)
// (...) Splat Operator (used in php,python)


// => Splat Operator (...)

function getval($val1,$val2,$val3){
    echo "Val1 result is = {$val1} <br/>";
    echo "Val2 result is = {$val2} <br/>";
    echo "Val3 result is = {$val3} <br/>";
}

getval('su su',"nu nu","yu yu"); // Val1 result is = su su Val2 result is = nu nu Val3 result is = yu yu
// getval(["red","green","blue"]); // error
getval(...["red","green","blue"]); //  Val1 result is = red Val2 result is = green Val3 result is = blue



function sumresult($num1,$num2,$num3){
    return $num1+$num2+$num3;
}

// echo sumresult([1,2,3]); // error
echo sumresult(...[1,2,3]); // 6
echo "<br/>";
echo sumresult(...[1,2,3,4]); // 6

echo "<hr/>";

// => func_get_args()

function totalresult(){
    $arrs = func_get_args();
    // echo $arrs; // Array
    // echo "<pre>".print_r($arrs,true)."</pre>";
    // echo count($arrs); // 3

    $total = 0;

    // for($x = 0; $x < count($arrs);$x++){
    //     $total += $arrs[$x];
    // }
    // return $total;

    // foreach($arrs as $arr){
    //     $total += $arr;
    // }
    // return $total;

    return array_sum($arrs);

}

// totalresult(10,20,30);
echo totalresult(); //60

// => Splat Operator in Array

$phones = ["apple","oppo","vivo","samsaung"];
$cars = ["toyota","suzuki","mazada"];
$computers = ["mac","aoc","acer"];

$myowns = [$phones,$cars,$computers];
echo "<pre>".print_r($myowns,true)."</pre>"; // multi dimational array

$yourowns = [...$phones,...$cars,...$computers];
echo "<pre>".print_r($yourowns,true)."</pre>"; // manual array

echo "<hr/>";

function myfunone($val){
    return $val . "<br/>";
}

echo myfunone("mango"); // mango
echo myfunone("mango","orange","apple"); // mango

echo "<hr/>";

function myfuntwo(...$val){
    return $val;
}

// echo myfuntwo("mango"); // array
echo "<pre>".print_r(myfuntwo("mango"),true)."</pre>"; // manual array
echo "<pre>".print_r(myfuntwo("mango","orange","apple"),true)."</pre>"; // manual array
echo "<pre>".print_r(myfuntwo(100,200,300),true)."</pre>"; // manual array
echo "<pre>".print_r(myfuntwo(["red","green","blue"]),true)."</pre>"; // manual array
echo "<pre>".print_r(myfuntwo("mango","orange","apple",["red","green","blue"],["red","green","blue"]),true)."</pre>"; // manual array

echo "<hr/>";

function myfunthree(...$val){
    echo $val[1] . "<br/>";
}

myfunthree("su su","nu nu","yu yu"); // nu nu
myfunthree(["su su","nu nu","yu yu"],"red","green","blue"); // red

echo "<hr/>";


function myfunfour(...$val):string{
    return $val[2] . $val[0][2] . $val[1] . "<br/>";
}

echo (myfunfour(["su su","nu nu","yu yu"]," is my elder sister ","Ms.")); // Ms.yu yu is my elder sister

echo "<hr/>";


function myfunfive(string $name,int ...$age):string{
    return "{$name} is {$age[0]} years old <br/>";
}

echo myfunfive("su su",25);

echo "<hr/>";

function myfunsix(int ...$numbers):int{
    return array_sum($numbers);
}

echo myfunsix(1,2,3); // 6

echo "<hr/>";

function sayhi($greeting,...$names){
    foreach($names as $name){
        echo "{$greeting} , $name! <br/>";
    }
}

sayhi("Hello","su su","nu nu","yu yu");

echo "<hr/>";

// => Coalescing Operator (??)

function myfunseven(...$val){
    echo $val[1] ? "Valid Data" : "No Data";
    echo "<br/>";
    echo $val[1] ?? "No Data";
}

myfunseven("Hello World","Dream World");
myfunseven("Hello World");


echo "<hr/>";

?>