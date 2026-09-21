<?php

ini_set('display_errors',1);

function getfilesizemethod1($filesize){

    // return $filesize;

    if(is_numeric($filesize)){

        $fixnum = 1024;
        $idx = 0;
        $prefix = ["B","Kb","Mb","Gb","Tb","Pb","Eb","Zb","Yb"];

        while(($filesize/$fixnum) > 0.9){
            $filesize = $filesize/$fixnum;
            $idx++;
        }

        return round($filesize,2).' '.$prefix[$idx];

    }else{
        return "NaN";
    }

}

echo getfilesizemethod1(2048); // bit to 2 Kb

echo "<hr/>";

function getfilesizemethod2($filesize){

    // return $filesize;

    if(is_numeric($filesize)){

        $fixnum = 1024;
        $idx = 0;
        $prefix = ["B","Kb","Mb","Gb","Tb","Pb","Eb","Zb","Yb"];

        if($filesize < $fixnum){
            return $filesize.' '.$prefix[$idx];
        }else{

            while($filesize > $fixnum){
                $filesize = round($filesize/$fixnum,2);
                $idx++;
            }

            return $filesize.' '.$prefix[$idx];

        }

    }else{
        return "NaN";
    }

}

echo getfilesizemethod2(2048); // bit to 2 Kb

echo "<hr/>";

function getfilesizemethod3($filesize){
    $size = filesize($filesize);

    $fixnum = 1024;
    $prefix = ["B","Kb","Mb","Gb","Tb","Pb","Eb","Zb","Yb"];

    $power = $size > 0 ? floor(log($size,$fixnum)) : 0;
                // log(2513,1024)   // 1.54245
                // floor(log(2513,1024)) // 1

    $result = round($size/pow($fixnum,$power),2).' '.$prefix[$power];

    return $result;
}

echo getfilesizemethod3("./l7array.php"); // bit to 2 Kb





?>