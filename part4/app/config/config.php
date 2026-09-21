<?php

// echo "config file is working <br/>";

// App Name
define('APPNAME', 'PHP OOP PROJECT');

// Root URL
define('ROOTURL','http://localhost/phpbatch16/part4');

// App URL
// echo __FILE__; // C:\xampp\htdocs\phpbatch16\part4\app\config\config.php
// echo dirname( __FILE__); // C:\xampp\htdocs\phpbatch16\part4\app\config
// echo dirname(dirname( __FILE__)); // C:\xampp\htdocs\phpbatch16\part4\app
define('APPURL',dirname(dirname( __FILE__)));


// DB Access
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','phpdbsix');















?>