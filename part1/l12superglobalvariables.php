<?php

// => Super Global Variables

// 1. $GLOBALS
// 2. $_SERVER
// 3. $_REQUEST
// 4. $_POST
// 5. $_GET
// 6. $_FILES
// 7. $_ENV
// 8. $_COOKIE
// 9. $_SESSION


// => 1. $GLOBALS

$x =100;
$y =200;
// error
// function sumresultone(){
    $total = $x + $y; // error: undefined variable $x and $y
//     return $total;
// }

// echo sumresultone(); // error
// echo $total; // error



function sumresultone(){
    $GLOBALS['total'] = $GLOBALS['x'] + $GLOBALS['y']; // using $GLOBALS super global variable
    return $GLOBALS['total'];
}

echo sumresultone(); // 300
echo $GLOBALS['total']; // 300
echo $total; // 300

echo "<hr/>";

// => 2. $_SERVER
echo $_SERVER["PHP_SELF"];           // /phpbatch16/part1/l12superglobalvariables.php
echo "<hr/>";
echo $_SERVER["HTTP_USER_AGENT"];    // Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/151.0.0.0 Safari/537.36
echo "<hr/>";
echo $_SERVER["HTTP_HOST"];          // localhost
echo "<hr/>";
echo $_SERVER["SERVER_NAME"];        // localhost (Return the name of host sever = eg: www.yourdomainname.com)
echo "<hr/>";
echo $_SERVER["SERVER_SOFTWARE"];    // Apache/2.4.58 (Win64) OpenSSL/3.1.3 PHP/8.2.12
echo "<hr/>";
echo $_SERVER["SERVER_PORT"];        // 80
echo "<hr/>";
echo $_SERVER["SERVER_PROTOCOL"];    // HTTP/1.1
echo "<hr/>";
echo $_SERVER["SERVER_SIGNATURE"];   // Apache/2.4.58 (Win64) OpenSSL/3.1.3 PHP/8.2.12 Server at localhost Port 80
echo "<hr/>";
echo $_SERVER["REQUEST_METHOD"];     // GET
echo "<hr/>";
echo $_SERVER["REMOTE_ADDR"];        // ::1
echo "<hr/>";
echo $_SERVER["SCRIPT_FILENAME"];    // C:/xampp/htdocs/phpbatch16/part1/l12superglobalvariables.php
echo "<hr/>";
echo $_SERVER["SCRIPT_NAME"];        // /phpbatch16/part1/l12superglobalvariables.php
echo "<hr/>";
// http://localhost/phpbatch16/part1/l12superglobalvariables.php?hsuhsu
echo $_SERVER["QUERY_STRING"];       // (hsu hsu)
echo "<hr/>";















?>