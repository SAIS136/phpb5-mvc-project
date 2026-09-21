<?php

$name = $email = $password = $city = $favcolor = $bio = "";

// if($_SERVER["REQUEST_METHOD"] === "POST"){
//     $name = $_POST["name"];
//     $email = $_POST["email"];
//     $password = $_POST["password"];
//     $city = $_POST["city"];
//     $favcolor = $_POST["favcolor"];
//     $bio = $_POST["bio"];
// }


if($_SERVER["REQUEST_METHOD"] === "POST"){
    $name = textfilter($_POST["name"]);
    $email = textfilter($_POST["email"]);
    $password = textfilter($_POST["password"]);
    $city = textfilter($_POST["city"]);
    $favcolor = textfilter($_POST["favcolor"]);
    $bio = textfilter($_POST["bio"]);
}

function textfilter($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);
    return $data;
}



?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Handling Exercise 2</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    </head>
    <body>

        <div class="container mt-5">

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label for="city">City</label>
                    <input type="text" name="city" id="city" class="form-control">
                </div>

                <div class="form-check mb-3">
                    <label>Fav Color</label>
                    <input type="radio" name="favcolor" id="favrd" class="form-form-check-input" value="Red Color"><label for="favrd">Red</label>
                    <input type="radio" name="favcolor" id="favgn" class="form-form-check-input" value="Green Color"><label for="favgn">Green</label>
                    <input type="radio" name="favcolor" id="favbl" class="form-form-check-input" value="Blue Color"><label for="favbl">Blue</label>
                </div>

                <div class="form-group mb-3">
                    <label for="bio">Bio</label>
                    <textarea name="bio" id="bio" class="form-control" rows="5"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>

        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>



<?php

    echo "<h2>My Information Are ...</h2>";
    echo "Name is $name <br/>";
    echo "Email is $email <br/>";
    echo "Password is $password <br/>";
    echo "City is $city <br/>";
    echo "Fav colors is $favcolor <br/>";
    echo "Bio is $bio <br/>";






?>