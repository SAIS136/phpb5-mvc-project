<?php

ini_set('display_errors', 1);

    // => MySQLi Object-Oriented

    // DB Connection
        $conn = new mysqli("localhost", "root", "", "phpone");

        if($conn->connect_errno){
            die("Connectio Failed : ". $conn->connect_errno);
        }else{
            echo "Connected Successfully <br>";
        }

        $sql = "SELECT id,name,email,password FROM users";
        $results = $conn->query($sql);

        echo "$results->num_rows";


if(isset($_POST['submit'])){

    $stmt = $conn->prepare("UPDATE users SET name=?,email=?,password=? WHERE id=?");
    $stmt->bind_param('sssi',$name,$email,$password,$id);

    // echo "Form Submitted";
    $id = $_POST['userid'];
    $name = textfilter($_POST['name']);
    $email = textfilter($_POST['email']);
    $password = textfilter($_POST['password']);
    $stmt->execute();

    // Data Insert Query

        // 1. db connect
        // 2. query
        // 3. prepare (encrypt)
        // 4. bind_param (decrypt)
        // 5. execute
        // 6. close


    echo "Update User Successfully.";

    $stmt->close();
    $conn->close();

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
        <title>Update Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>

        <div class="container">
            <div class="col-md-6 mx-auto">
                <h3 class="text-center my-3">Update Form</h3>

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                    <div class="form-group mb-3">
                        <label for="userid">User ID</label>
                        <select name="userid" id="userid" class="form-control">
                            <!-- <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option> -->

                            <?php
                            
                                if($results->num_rows > 0){
                                    while($row = $results->fetch_assoc()){
                                        $id = $row['id'];
                                        echo "<option value='$id'>$id</option>";
                                    }
                                }else{
                                        echo "<option value=''>No Data</option>";
                                }

                            ?>

                        </select>
                    </div>

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

                    <input type="submit" name="submit" id="submit" class="btn btn-primary float-end" value="Update">

                </form>

            </div>
        </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>





