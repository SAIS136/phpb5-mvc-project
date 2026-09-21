<?php

session_start();

// => Auth Check (check user login or not)

function authcheck(){
    if(isset($_SESSION['user_id'])){
        return true;
    }else{
        return false;
    }
}


// => Authcheck by dynamic key

function authdyncheck($key = "user_id"){
    return isset($_SESSION[$key]);
}



// => Logout

function logout(){
    session_unset();
    session_destroy();
}


?>