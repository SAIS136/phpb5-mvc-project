<?php

ini_set('display_errors', 1);

// (i) MySQLi Procedural

// $conn = mysqli_connect("localhost","root","","phpdbone");

// if(mysqli_connect_errno()){
//     echo "Failed to connect to MySQL: " . mysqli_connect_error();
//     exit();
// }else{
//     echo "Connected successfully <br>";
// }

// $stmt = "DELETE FROM students WHERE id=1";

// if(mysqli_query($conn, $stmt)){
//     echo "Data deleted successfully";
// }else{
//     echo "Error Found";
// }

// mysqli_close($conn);


// (ii) MySQLi Object Oriented


// $conn = new mysqli("localhost","root","","phpdbtwo");

// if($conn->connect_errno){

//        echo "Failed to connect to MySQL: " . mysqli_connect_errno();
//        exit();

//     die("Connection failed: " . $conn->connect_errno);

// }else{
//     echo "Connected successfully <br>";
// }

//     $stmt = "DELETE FROM students WHERE id=3";

// if($conn->query($stmt)){
//     echo "Data deleted successfully";
// }else{
//     echo "Error Found";
// }

// $conn->close();


// (iii) PDO

// $dbhost = "localhost";
// $dbuser = "root";
// $dbpass = "";
// $dbname = "phpdbthree";

// try {
//     $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully <br>";

//     $stmt = "DELETE FROM students WHERE id=6";

//     $conn->exec($stmt);

//     echo "Data deleted successfully";

// } catch(PDOException $e) {
//     echo "Error Found: " . $e->getMessage();
// }

// $conn = null;




?>