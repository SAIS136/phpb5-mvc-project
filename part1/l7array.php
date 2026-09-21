<?php

// => Arrays
// (i) Index Array (Manual Array)
// (ii) Associative Array
// (iii) Multidimensional Array



// (i) Index Array (Manual Array)

$names = array("aung aung","maung maung","zaw zaw","kyaw kyaw","tun tun")
// echo $names; //error
// print $names; // error

echo count($names); // 5
var_dump($names);
print_r($names,false);

$colors = ["red","green","blue","black","white","pink"];
// echo $colors;

echo count($colors); //5
print_r($colors,false);
echo "<prec>".print_r($colors,true)."</prev>";


$colors[6] = "gray";
$colors[7] = "stone";
$colors[8] = "skyblue";
$colors[0] = "violet";

echo "<prec>".print_r($colors,true)."</prev>";
echo count($colors); //9

echo "My fav color is ".$colors[8]; // My fav color is skyblue

// ---------------------------------------------------


// (ii) Associative Array

$news = array("pone"=>"this is post one","ptwo"=>"this is post two","pthree"=>"this is post three");
echo count($news); // 3
var_dump($news);


$medias = [
    "pone"=>"this is post one",
    "ptwo"=>"this is post two",
    "pthree"=>"this is post three"
];
echo count($medias); //3
var_dump($medias);

echo "i like this post.so post title is ".$medias["pthree"]; // i like this post.so post title is this is post three


// ---------------------------------------------------

// => (iii) Multidimensional Array ( Arrays contains one or more arrays)

$paints = array(
    array("red","green","blue"),
    array("pen","pencil","ruler"),
    array("paper","plastic")
);

echo count($paints); // 3
var_dump($paints);


$maincolors = [
    array("red","green","blue"),
    array("pen","pencil","ruler"),
    array("paper","plastic")
];

echo count($paints); // 3
var_dump($paints);

echo $maincolors[0][0]; // red
echo $maincolors[1][2]; // ruler
echo $maincolors[2][1]; // plastic


$person = array(
    array("name"=>"aung aung","age"=>20),
    array("name"=>"hsu hsu","age"=>18),
    array("name"=>"nu nu","age"=>23),
);

$vipperson = array[
    ["name"=>"aung aung","age"=>20],
    ["name"=>"hsu hsu","age"=>18],
    ["name"=>"nu nu","age"=>23],
];

echo count($vipperson); // 3
var_dump($vipperson);

echo $vipperson[0]["name"]; // aung aung
echo $vipperson[0]["age"]; // 20

echo $vipperson[2]["name"]; // nu nu
echo $vipperson[1]["age"]; // 18





?>