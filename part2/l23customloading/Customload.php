<?php

// echo __DIR__; // C:\xampp\htdocs\phpbatch16\part2\l22namespaceexercise

class Customload{

    public static function loader($classname){
        echo "Loading the class = {$classname} <br/>";
        $file = str_replace("\\","/",$classname).".php";

        if(file_exists($file)){
            require_once (__DIR__."/".$file);
        }else{
            echo "No File Exists";
        }

    }

}



?>