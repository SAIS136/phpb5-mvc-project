<?php

function mycolor($color){

    if($color !== "red"){
                        // new Exception(message);
        throw new Exception("I hate $color color");
    }

    return "Yeah! my fav color is $color";

}

echo mycolor("red");



function mynum($base,$power){

    if($power > 3){
        throw new Exception("We not allow over $power");
    }

    $result = pow($base,$power);
    return $result;
}

echo mynum(2,3);




// => try..catch statement

// try{
//     code to be executed
// }catch(Exception $e){
//     code to be exception is catch
// }


function mycolor1($color){

    if($color !== "red"){
        throw new Exception("I hate $color color");
    }

    return "Yeah! my fav color is $color";
}

// echo mycolor1("black");

try{
    echo mycolor1("black");
}catch(Exception $e){
    echo "You should not try with this color";
}

try{
    echo mycolor1("black");
}catch(Exception $e){
    echo $e->getMessage();
}



function mypower($base,$power){

    if($power > 3){
        throw new Exception("We not allow over $power");
    }

    $result = pow($base,$power);
    return $result;
}

// echo mypower(2,6);

try{
    echo mypower(2,6);
}catch(Exception $e){
    echo "You should not over". $e->getMessage();
}

try{
    echo mypower(2,3);
}catch(Exception $e){
    echo "You should not over". $e->getMessage();
}




// => try..catch..finally statement

// try{
//     code to be executed
// }catch(Exception $e){
//     code to be exception is catch
// }finally{
        // code that always rums regardless of weather an exception was catch or not !
// }



function myval($base,$power){

    if($power > 3){
        throw new Exception("We not allow over $power");
    }

    $result = pow($base,$power);
    return $result;
}

// echo myval(2,4);

try{
    echo myval(2,4);
}catch(Exception $e){
    echo "You should not over . ". $e->getMessage();
}finally{
    echo "Hey there!! I am joker";
}





















?>