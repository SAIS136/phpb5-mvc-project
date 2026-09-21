<?php

// => PHP Looping

// for
// foreach
// while
// do..while

$colorones = ["red","green","blue","white","black","gray","pink"]
echo count($colorones);
var_dump($colorones);

$coloroneskey = array_keys($colorones);
// echo $coloroneskey; // error
var_dump($coloroneskey);

for($i=0; $i < count($colorones); $i++){
    // echo $i; // 0 to 6

    // echo "This is indexed array or manual array by forloop = index key is ". $i ."and value is = ".$colorones[$i]."<br>";

    echo "This is indexed array or manual array by forloop = index key is ". $coloroneskey[$i] ."and value is = ".$colorones[$i]."<br>";
}


foreach($colorones as $colorone){
    echo "This is indexed array or manual array by foreach = ". $colorone;
}

foreach($colorones as $key=>$colorone){
    // echo $key;
       echo "This is indexed array or manual array by foreach =index key is ".$key ."and value is". $colorone;
}


$x = 0;
while($x < count($colorones)){
    // echo $colorones[$x];
    // $x++;

    // echo "This is indexed array or manual array by while =index key is ".$x ."and value is". $colorones[$x];
    echo "This is indexed array or manual array by while =index key is ".$coloroneskey[$x] ."and value is". $colorones[$x];

    $x++;
}


$y=0;

do{
    // echo "This is indexed array or manual array by while =index key is ".$y ."and value is". $colorones[$y];
    echo "This is indexed array or manual array by while =index key is ".$coloroneskey[$y] ."and value is". $colorones[$y];
}while($y < count($colorones));














?>