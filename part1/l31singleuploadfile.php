<?php

// phpinfo();

ini_set('display_error',1);

// if(isset($_POST['submit'])){
//     // echo "hay";

//     // $result = $_POST['profile'];
//     // echo $result; //error

//     $result = $_FILES;
//     // echo $result;
//     echo "<pre>".print_r($result,true)."</pre>";

//     echo $_FILES['profile']['name'] . "<br/>";
//     echo $_FILES['profile']['full_path'] . "<br/>";
//     echo $_FILES['profile']['type'] . "<br/>";
//     echo $_FILES['profile']['tmp_name'] . "<br/>";
//     echo $_FILES['profile']['error'] . "<br/>";
//     echo $_FILES['profile']['size'] . "<br/>";

//     $fileext = explode('.',$_FILES['profile']['name']);
//     echo "<pre>".print_r($result,true)."</pre>";
//     echo $fileext[0]. "<br/>";
//     echo $fileext[1]. "<br/>";

//     $filename = current(explode('.',$_FILES['profile']['name']));
//     echo $filename . "<br/>";

//     // $fileextension = end(explode('.',$_FILES['profile']['name']));
//     // echo $filename . "<br/>";





// }


// sudo chmod 777 -R assets/

// if(isset($_POST['submit'])){

//     $uploaddir = "assets/";
//     // $uploadfile = $uploaddir.$_FILES['profile']['name']; //
//     $uploadfile = $uploaddir.basename($_FILES['profile']['name']); //


//     // move_uploaded_file(temp,actual path and name)

//     if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
//         echo "File Successfully Upload";
//     }else{
//         echo "Try Again";
//     }

// }



// if(isset($_POST['submit'])){

//     $uploaddir = "C:/xampp/htdocs/phpbatch16/part1/assets/";
//     $uploadfile = $uploaddir.basename($_FILES['profile']['name']); //
//     $uploadsize = $_FILES['profile']['size'];

//     echo $uploadsize;

//     // 6000 bit = 60 kb
//     if($uploadsize > 60000){
//         echo "Sorry , Your file is too large";
//     }else{
//         // echo "Allowed file size";
//     }


//     // move_uploaded_file(temp,actual path and name)

//     if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
//         echo "File Successfully Upload";
//     }else{
//         echo "Try Again";
//     }

// }



// if(isset($_POST['submit'])){

//     $uploaddir = "C:/xampp/htdocs/phpbatch16/part1/assets/";
//     $uploadfile = $uploaddir.basename($_FILES['profile']['name']); //
//     $uploadsize = $_FILES['profile']['size'];
//     $uploadtype = strtolower(pathinfo($uploadfile,PATHINFO_EXTENSION));

//     // echo $uploadsize;
//     // echo $uploadtype;


//     // 6000 bit = 60 kb
//     if($uploadtype !== 'jpg' && $uploadtype !== 'jpeg' && $uploadtype !== 'png' && $uploadtype !== 'gif'){
//         echo "Sorry, we just allowwed for JPG,JPEG,PNG & GIF file types";
//     }else{
//         echo "Allowed file type";

//         if($uploadsize > 60000){
//             echo "Sorry , Your file is too large";
//         }else{
//             // echo "Allowed file size";
//         }


//         // move_uploaded_file(temp,actual path and name)

//         if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
//             echo "File Successfully Upload";
//         }else{
//             echo "Try Again";
//         }

//     }

// }


// if(isset($_POST['submit'])){

//     $uploaddir = "assets/";
//     $uploadfile = $uploaddir.basename($_FILES['profile']['name']); //
//     $uploadsize = $_FILES['profile']['size'];
//     $uploadtype = strtolower(pathinfo($uploadfile,PATHINFO_EXTENSION));
//     $ready = true;

//     // echo $uploadsize;
//     // echo $uploadtype;

//     // check file already exists or not
//     if(file_exists($uploadfile)){
//         echo "Sorry , File already exists. <br/>";
//         $ready = false;
//     }

//     // check file size

//     if($uploadsize > 60000){
//         echo "Sorry , Your file is too large";
//         $ready = false;
//     }

//     // check file format
//     if($uploadtype !== 'jpg' && $uploadtype !== 'jpeg' && $uploadtype !== 'png' && $uploadtype !== 'gif'){
//         echo "Sorry, we just allowwed for JPG,JPEG,PNG & GIF file types";
//         $ready = false;
//     }

//     // upload

//     if($ready){
//         // move_uploaded_file(temp,actual path and name)

//         if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
//             echo "File Successfully Upload";
//         }else{
//             echo "Try Again";
//         }

//     }else{
//         echo "Sorry, your file was not uploaded";
//     }

// }



if(isset($_POST['submit'])){

    $uploaddir = "assets/";
    $uploadfile = $uploaddir.basename($_FILES['profile']['name']); //
    $uploadsize = $_FILES['profile']['size'];
    $uploadtype = strtolower(pathinfo($uploadfile,PATHINFO_EXTENSION));
    $allowextensions = ["jpg","jpeg","png","gif"];
    $errors = [];

    // echo $uploadsize;
    // echo $uploadtype;

    // check file already exists or not
    if(file_exists($uploadfile)){
        $errors[] = "Sorry , File already exists. <br/>";
    }

    // check file size

    if($uploadsize > 60000){
        $errors[] = "Sorry , Your file is too large";
    }

    // check file format
    if(in_array($uploadtype,$allowextensions) === false){
        $errors[] = "Sorry, we just allowwed for JPG,JPEG,PNG & GIF file types";
    }

    // upload

    if(empty($errors) === true){
        // move_uploaded_file(temp,actual path and name)

        if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
            echo "File Successfully Upload";
        }else{
            echo "Try Again";
        }

    }else{
        echo "<pre>".print_r($errors,true)."</pre>";
    }

}




?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Single Upload File</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>

        <div class="col-md-6 mx-auto mt-5">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <div class="from-group mb-3">
                    <label for="profile">Profile Picture</label>
                    <input type="file" name="profile" id="profile" class="form-control">
                </div>
                <input type="submit" name="submit" id="" class="btn btn-primary rounded-0 float-end" value="Upload">
            </form>
        </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>

<!--
bit
byte
kilo byte
mega byte
giga byte
tera byte
peta byte
exa byte
zetta byte
yotta byte
-->


<!--
1Mb = 1024kb instead of 1000Kb
01 base 2

2^0 = 1
2^1 = 2
2^2 = 4
2^3 = 8
2^4 = 16
2^5 = 32
2^6 = 64
2^7 = 128
2^8 = 256
2^9 = 512
2^10 = 1024

Bytes to kb
Kilobyte = Byte / 1024
2 kb     = 2048/1024

kb to mb
Megabyte = KiloByte / 1024
3 kb     = 3072/1024

Bytes to Mb

Kilobyte = Byte / 1024
Megabyte = KiloByte / 1024

Megabyte = Byte / 1024 * 1024

1 Mb     = 1048567 / 1024 * 1024

-->
