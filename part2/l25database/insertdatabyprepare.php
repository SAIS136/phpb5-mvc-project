<?php

ini_set('display_errors', 1);

// The arguments ( 4 types )
// s = string
// i = integer
// d = double
// b = blob


// (i) MySQLi Procedural

// $conn = mysqli_connect("localhost","root","","phpdbone");

// if(mysqli_connect_errno()){
//     echo "Failed to connect to MySQL: " . mysqli_connect_error();
//     exit();
// }else{
//     echo "Connected successfully <br>";
// }

// $stmt = "INSERT INTO students (firstname, lastname, city) VALUES (?, ?, ?)";
// $insertstmt = mysqli_prepare($conn, $stmt);
// mysqli_stmt_bind_param($insertstmt, "sss", $firstname, $lastname, $city);

// $firstname = "Hsu";
// $lastname = "Hsu";
// $city = "Yangon";

// mysqli_stmt_execute($insertstmt);

// echo "Data inserted successfully";

// mysqli_close($conn);


// $conn = mysqli_connect("localhost","root","","phpdbone");

// if(mysqli_connect_errno()){
//     echo "Failed to connect to MySQL: " . mysqli_connect_error();
//     exit();
// }else{
//     echo "Connected successfully <br>";
// }

// $stmt = "INSERT INTO students (firstname, lastname, city) VALUES (?, ?, ?)";
// $insertstmt = mysqli_prepare($conn, $stmt);
// mysqli_stmt_bind_param($insertstmt, "sss", $firstname, $lastname, $city);

// $firstname = "Nu";
// $lastname = "Nu";
// $city = "Mandalay";
// mysqli_stmt_execute($insertstmt);

// $firstname = "Yu";
// $lastname = "Yu";
// $city = "Bago";
// mysqli_stmt_execute($insertstmt);

// $firstname = "Hla";
// $lastname = "Hla";
// $city = "Yangon";
// mysqli_stmt_execute($insertstmt);

// echo "Data inserted successfully";

// mysqli_stmt_close($stmt);
// mysqli_close($conn);


// (ii) MySQLi Object Oriented


// $conn = new mysqli("localhost","root","","phpdbtwo");

// if($conn->connect_errno){

//     echo "Failed to connect to MySQL: " . mysqli_connect_errno();
//     exit();

//     die("Connection failed: " . $conn->connect_errno);

// }else{
//     echo "Connected successfully <br>";
// }

// $stmt = $conn->prepare("INSERT INTO students (firstname, lastname, city) VALUES (?, ?, ?)");
// $stmt->bind_param("sss", $firstname, $lastname, $city);

// $firstname = "Nu";
// $lastname = "Nu";
// $city = "Mandalay";
// $stmt->execute();

// $firstname = "Yu";
// $lastname = "Yu";
// $city = "Bago";
// $stmt->execute();

// $firstname = "Hla";
// $lastname = "Hla";
// $city = "Yangon";
// $stmt->execute();

// echo "Data inserted successfully";


// $stmt->close();
// $conn->close();


// (iii) PDO

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "phpdbthree";

try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully <br>";

    $stmt = $conn->prepare("INSERT INTO students (firstname, lastname, city) VALUES (:firstname, :lastname, :city)");
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':city', $city);

    $firstname = "Hsu";
    $lastname = "Hsu";
    $city = "Yangon";
    $stmt->execute();

    $firstname = "Hsu";
    $lastname = "Mon";
    $city = "Mandalay";
    $stmt->execute();

    $firstname = "Hsu";
    $lastname = "Myat";
    $city = "Yangon";
    $stmt->execute();

    echo "Data inserted successfully";

} catch(PDOException $e) {
    echo "Error Found: " . $e->getMessage();
}

$conn = null;



?>