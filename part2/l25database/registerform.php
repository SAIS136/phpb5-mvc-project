<?php

ini_set('display_errors', 1);

// if(isset($_POST['submit'])){
//     echo "Form Submitted";
// }



if(isset($_POST['submit'])){
    // echo "Form Submitted";
    $getName = textfilter($_POST['name']);
    $getEmail = textfilter($_POST['email']);
    $getPassword = textfilter($_POST['password']);

    // echo $getName . "<br>";
    // echo $getEmail . "<br>";
    // echo $getPassword . "<br>";

    // => MySQLi Procedural

    // DB Connection
    $conn = mysqli_connect("localhost", "root", "", "phpone");

    if($conn->connect_error){
        echo "Failed to connect mysql = " . $conn->connect_error;
        exit();
    }else{
        echo "Connected Successfully <br>";
    }

    // Data Insert Query

        // 1. db connect
        // 2. query
        // 3. prepare (encrypt)
        // 4. bind_param (decrypt)
        // 5. execute
        // 6. close

    $stmt = "INSERT INTO users(name, email, password) VALUES(?, ?, ?)";
    $insertstmt = mysqli_prepare($conn, $stmt);
    mysqli_stmt_bind_param($insertstmt, "sss", $getName, $getEmail, $getPassword);
    mysqli_stmt_execute($insertstmt);

    echo "New User Created Successfully";

    mysqli_close($conn);





}


function textfilter($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}








?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>

        <div class="container">
            <div class="col-md-6 mx-auto">
                <h3 class="text-center my-3">Register Form</h3>

                <form action="" method="post">

                    <div class="form-group mb-3">
                        <label for="name"">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" autocomplete="off">
                    </div>

                    <div class="form-group mb-3">
                        <label for="email"">Email</label>
                        <input type="email" class="form-control" id="email" name="email" autocomplete="off">
                    </div>

                    <div class="form-group mb-3">
                        <label for="password"">Password</label>
                        <input type="password" class="form-control" id="password" name="password" autocomplete="off">
                    </div>

                    <input type="submit" name="submit" id="submit" class="btn btn-primary float-end" value="Sign Up">

                </form>

            </div>
        </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>


<!--
CREATE TABLE IF NOT EXISTS users(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    name VARCHAR(20),
    email VARCHAR(50),
    password VARCHAR(255)
);
 -->






