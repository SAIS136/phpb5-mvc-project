<?php

ini_set('display_errors',1);

require_once('dbconnect.php');
require_once('sessionconfig.php');

if(authfailed()){
    redirectto('signin.php');
}


try{
    $conn = $GLOBALS['conn'];

    $stmt = $conn->prepare("SELECT id,profile,firstname,lastname,email,dob,phone,address FROM users");
    $stmt->execute();

    // formatprint($stmt->fetchAll());

}catch(PDOException $e){
    echo "Error Found : ".$e->getMessage();
}

$conn = null;


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Users List</title>
    </head>
    <body>

        <div class="container">

            <a href="signup.php">Create User</a>

            <table>
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Birthday</th>
                    <th>Phone</th>
                    <th>Address</th>
                </thead>
                <tbody>
                    <?php while($row = $stmt->fetch()): ?>
                        <tr>
                            <td><?php echo "{$row['id']}" ?></td>
                            <td>
                                <img src='<?php "{$row['profile']}" ?>' style="width:25px;height:25px;broder-radius:50%;">
                                <?php echo "{$row['firstname']} {$row['lastname']}" ?>
                            </td>
                            <td><?php echo "{$row['email']}" ?></td>
                            <td><?php echo "{$row['dob']}" ?></td>
                            <td><?php echo "{$row['phone']}" ?></td>
                            <td><?php echo "{$row['address']}" ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>

        </div>

    </body>
</html>