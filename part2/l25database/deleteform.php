<?php

ini_set('display_errors', 1);

    // => PDO

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = '';
    $dbname = "phpone";

    // DB Connection
        
        try{
            $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->prepare("SELECT id,name,email FROM users");
            $stmt->execute();

            // while($row = $stmt->fetch()){
            // echo "id : ".$row['id']."name : ".$row['name']."email : ".$row['email']."<br/>";
            // }

        }catch(PDOException $e){
            echo "Error Found : ". $e->getMessage();
        }

        if(isset($_POST['submit'])){

            $qry = $conn->prepare("DELETE FROM users WHERE id=:id");
            $qry->bindParam(":id",$id);

            $id = $_POST['submit'];
            $qry->execute();

            echo $qry->rowCount(). "User Deleete Successfully";

            $qry = null;
            $conn = null;

            // Redirect by PHP
            // $currentpage = $_SERVER['PHP_SELF'];
            // header("location:$currentpage");
            // exit;

            // Redirect by javascript

            echo "<script type='text/javascript'>
                    // method 1
                    window.location.href = window.location.href;

                    // method 2
                    // window.location.replace(window.location.href);

                    // method 3
                    // window.location.assign(window.location.href);
           
            </script>";


        }

        


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delete Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>

        <div class="container">
            <div class="col-md-6 mx-auto">
                <h3 class="text-center my-3">Delete Form</h3>

                <table class="table border table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                            while($row = $stmt->fetch()){

                                $id = $row['id'];
                                $name = $row['name'];
                                $email = $row['email'];

                                echo "<tr>";
                                    echo "<td>$id</td>";
                                    echo "<td>$name</td>";
                                    echo "<td>$email</td>";
                                    echo "<td><form action='' method='post'><button type='submit' name='submit' id='submit' class='btn btn-danger btn-sm rounded-0' value='$id'>Delete</button></form></td>";
                                echo "</tr>";


                            }
                        
                        ?>
                        
                    </tbody>
                </table>

            </div>
        </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>





