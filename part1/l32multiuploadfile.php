<?php

ini_set('display_error',1);


if(isset($_POST['submit'])){

    $uploaddir = 'assets/';
    $filenames = $_FILES['profile']['name'];
    $filetmps = $_FILES['profile']['tmp_name'];
    $fileerrs = $_FILES['profile']['error'];
    // echo "<pre>".print_r($fileerrs,true)."</pre>";

    foreach($fileerrs as $idx=>$fileerr){
        // echo $idx . "<br/>"; // 0 to 2
        // echo $fileerr . "<br/>";

        // UPLOAD_ERR_OK , mean there are no errors.
        if($fileerr === UPLOAD_ERR_OK){

            $getfilename = $filenames[$idx];
            $uploadfile = $uploaddir.basename($getfilename);
            $getfiletmp = $filetmps[$idx];

            if(move_uploaded_file($getfiletmp,$uploadfile)){
                echo "Files Successfully Uploaded";
            }else{
                echo "Upload Failed";
            }

        }

    }

}



?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Multi Upload Files</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>

        <!-- <div class="col-md-6 mx-auto mt-5">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <div class="from-group mb-3">
                    <label for="profile">Profile Picture</label>
                    <input type="file" name="profile[]" id="profile1" class="form-control">
                    <input type="file" name="profile[]" id="profile2" class="form-control">
                    <input type="file" name="profile[]" id="profile3" class="form-control">
                </div>
                <input type="submit" name="submit" id="" class="btn btn-primary rounded-0 float-end" value="Upload">
            </form>
        </div> -->

        <div class="col-md-6 mx-auto mt-5">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <div class="from-group mb-3">
                    <label for="profile">Profile Picture</label>
                    <input type="file" name="profile[]" id="profile1" class="form-control" multiple>
                </div>
                <input type="submit" name="submit" id="" class="btn btn-primary rounded-0 float-end" value="Upload">
            </form>
        </div



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
