<?php

ini_set('display_errors', 1);

// => (i) MySQLi Procedural

    // => DB Connect
    // mysqli_connect(host,dbusername,dbpassword,dbname);
    // $conn = mysqli_connect("localhost","root","","phpone");

// => (ii) MySQLi Object Oriented

    // new mysqli(servername,dbusername,dbpassword,dbname);
    // $conn = new mysqli("localhost","root","","phpone");

// => (iii) PDO ( PHP Data Objects )

    // new PDO("mysql:host=host;dbname=dbname","dbusername","dbpassword");

    // $conn = new PDO("mysql:host=localhost;dbname=phpone","root","");
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // => Method 1

    // $dbhost = "localhost";
    // $dbuser = "root";
    // $dbpass = "";
    // $dbname = "phpone";

    // $conn = new PDO("mysql:host=$dbhost;dbname=$dbname","$dbuser","$dbpass");
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // => Method 2
                // ( Set DSN = Data Source Name )

    // $optons = [PDO::ATTR_PERSISTENT=>true, PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];
    // $conn = new PDO("mysql:host=$dbhost;dbname=$dbname","$dbuser","$dbpass");


// => Exercise

    // => (i) MySQLi Procedural (mysqli_close($conn))
    // $conn = mysqli_connect("localhost","root","","phpone");

    // if(mysqli_connect_errno()){
    //     echo "Failed to connect to MySQL: " . mysqli_connect_error();
    //     exit();

        // die("Connection failed: " . mysqli_connect_error());

    // }else{
    //     echo "Connected successfully";
    // }


    // if(!$conn){
    //     echo "Failed to connect to MySQL: " . mysqli_connect_error();
    //     exit();

        // die("Connection failed: " . mysqli_connect_error());

    // }else{
    //     echo "Connected successfully";
    // }


    // => (ii) MySQLi Object Oriented ($conn->close())

    // $conn = new mysqli("localhost","root","","phpone");

    // if($conn->connect_error){
    //     echo "Failed to connect to MySQL: " . mysqli_connect_error();
    //     exit();

    //     die("Connection failed: " . $conn->connect_error);

    // }else{
    //     echo "Connected successfully";
    // }


        // $conn = new mysqli("localhost","root","","phpone");

    // if($conn->connect_errno){
    //     echo "Failed to connect to MySQL: " . mysqli_connect_errno();
    //     exit();

    //     die("Connection failed: " . $conn->connect_errno);

    // }else{
    //     echo "Connected successfully";
    // }




    // => (iii) PDO ( PHP Data Objects )

    // $dbhost = "localhost";
    // $dbuser = "root";
    // $dbpass = "";
    // $dbname = "phpone";


    // try{

    //     $conn = new PDO("mysql:host=$dbhost;dbname=$dbname","$dbuser","$dbpass");
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //     echo "Connected successfully";

    // }catch(PDOException $e){
    //     die("Connection failed: " . $e->getMessage());
    // }





?>