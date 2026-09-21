<?php

ini_set('display_errors',1);


// echo __DIR__; // C:\xampp\htdocs\phpbatch16\part2\l22namespaceexercise

use gallery\slideshow\Image;
use gallery\slideshow as viewer;

spl_autoload_register(function($classname){

    echo "Loading the class = {$classname} <br/>";

            // str_replace(find,replace,string)
    $file = str_replace("\\","/",$classname).".php";

    echo $file . "<br/>";

    if(file_exists($file)){
        require_once (__DIR__."/".$file);
    }else{
        echo "No File Exists";
    }




});





$musicobj = new Music();
$musicobj->play();


$videoobj = new Video();
$videoobj->play();

// error with namespace
// $photoobj = new Photo();
// $photoobj->play();


$portrait = new gallery\animateshow\Portrait();
$portrait->play();

$portrait = new Image();
$portrait->play();

$portrait = new viewer\Picture();
$portrait->play();

?>