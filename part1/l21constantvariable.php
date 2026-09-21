<?php

// => Constant Variable

define('variablename','value');
// string/int/boolean/float oki
// variablename should be uppercase
// redefine are deny


define('FULLNAME','HONEY NWAY OO');
echo FULLNAME; // HONEY NWAY OO

// define('FULLNAME','Mya Mya');
// echo FULLNAME; // HONEY NWAY OO


define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","123456");
define("DB_NAME","phpdbone");

echo DB_HOST;
echo "<br/>";
echo DB_USER;
echo "<br/>";
echo DB_PASS;
echo "<br/>";
echo DB_NAME;
echo "<br/>";


// => constant("variablename") Function

echo constant("DB_HOST");
echo "<br/>";
echo constant("DB_USER");
echo "<br/>";
echo constant("DB_PASS");
echo "<br/>";
echo constant("DB_NAME");
echo "<br/>";




// => constant : const keyword
// string/int/boolean/float oki
// variablename should be uppercase
// redefine are deny

const MESSAGE = "Hello sir, are you ready to learn PHP OOP concept ?";
echo MESSAGE;
echo constant('MESSAGE');

// const MESSAGE = "Hello sir, are you ready to learn Javascript ES6 concept ?";
// echo MESSAGE;
// echo constant('MESSAGE');








?>