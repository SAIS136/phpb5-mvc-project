<?php

ini_set('display_errors', 1);

// (i) MySQLi Procedural

// $conn = mysqli_connect("localhost","root","","phpone");

// if(mysqli_connect_errno()){
//     echo "Failed to connect to MySQL: " . mysqli_connect_error();
//     exit();
// }else{
//     echo "Connected successfully <br>";
// }

// $stmt = "CREATE DATABASE IF NOT EXISTS phpdbone";

// if(mysqli_query($conn, $stmt)){
//     echo "Database created successfully";
// }else{
//     echo "Error Found";
// }

// mysqli_close($conn);


// (ii) MySQLi Object Oriented


// $conn = new mysqli("localhost","root","","phpone");

// if($conn->connect_errno){

//      echo "Failed to connect to MySQL: " . mysqli_connect_errno();
//      exit();

//     die("Connection failed: " . $conn->connect_errno);

// }else{
//     echo "Connected successfully <br>";
// }

// $stmt = "CREATE DATABASE IF NOT EXISTS phpdbtwo";

// if($conn->query($stmt)){
//     echo "Database created successfully";
// }else{
//     echo "Error Found";
// }

// $conn->close();



// (iii) PDO

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";



try {
    $conn = new PDO("mysql:host=$dbhost", $dbuser, $dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully <br>";

    $stmt = "CREATE DATABASE IF NOT EXISTS phpdbthree";
    $conn->exec($stmt);

} catch(PDOException $e) {
    echo "Error Found: " . $e->getMessage();
}

$conn = null;


?>