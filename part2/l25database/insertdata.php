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

// $stmt = "INSERT INTO students (firstname, lastname, city) VALUES ('Hsu', 'Hsu', 'Yangon')";

// if(mysqli_query($conn, $stmt)){
//     echo "Data inserted successfully";
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

// $stmt = "INSERT INTO students (firstname, lastname, city) VALUES ('Hsu', 'Hsu', 'Yangon'), ('Hsu', 'Mon', 'Mandalay')";

// if($conn->query($stmt)){
//     echo "Data inserted successfully";
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

//    $stmt = "INSERT INTO students (firstname, lastname, city) VALUES ('Hsu', 'Hsu', 'Yangon');";
//    $stmt .= "INSERT INTO students (firstname, lastname, city) VALUES ('Hsu', 'Mon', 'Mandalay');";
//    $stmt .= "INSERT INTO students (firstname, lastname, city) VALUES ('Hsu', 'Myat', 'Yangon');";

//     $conn->exec($stmt);

//     echo "Data inserted successfully";

// } catch(PDOException $e) {
//     echo "Error Found: " . $e->getMessage();
// }

// $conn = null;




// $dbhost = "localhost";
// $dbuser = "root";
// $dbpass = "";
// $dbname = "phpdbthree";

// try {
//     $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully <br>";

//     $conn->exec("INSERT INTO students (firstname, lastname, city) VALUES ('mon', 'mon', 'Yangon')");
//     $conn->exec("INSERT INTO students (firstname, lastname, city) VALUES ('yoon', 'yoon', 'Yangon')");
//     $conn->exec("INSERT INTO students (firstname, lastname, city) VALUES ('nu', 'nu', 'Yangon')");


//     echo "Data inserted successfully";

// } catch(PDOException $e) {
//     echo "Error Found: " . $e->getMessage();
// }

// $conn = null;


?>