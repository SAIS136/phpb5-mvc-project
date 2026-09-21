<?php

    function setpassword($plaintext){
        $passcode = $plaintext;
        echo $passcode;
    }

    setpassword("password123");



    function setpassworddef($plaintext){
        $passcode = password_hash($plaintext,PASSWORD_DEFAULT); // dyn code
        echo "Before Encrypt = {$plaintext} , After Encrypt = {$passcode} ";
        echo strlen($passcode); // 60
    }

    setpassworddef("password123"); // Before Encrypt = password123 , After Encrypt = $2y$10$gnyMp9A9nQwbECpj3PlkA.ae9Do4rhx4UpbjAC08isGfHLiaYeNZC 



    function passwordbcry($plaintext){
        $passcode = password_hash($plaintext,PASSWORD_BCRYPT); // dyn code
        echo "Before Bcrypt = {$plaintext} , After Bcrypt = {$passcode} ";
        echo strlen($passcode); // 60
    }

    passwordbcry("password123"); // Before Bcrypt = password123 , After Bcrypt = $2y$10$7.ap3HHZh..XRklpDzW7qeiTnbovTA8/z33n.fckqy/3bTXH/OvrG



    function passworddecry(){

        $plaintextone = "password123";
        $encodeone = password_hash($plaintextone,PASSWORD_DEFAULT);

        $plaintexttwo = "password123";
        $encodetwo = password_hash($plaintexttwo,PASSWORD_DEFAULT);

        echo "Encrypt Code One = {$encodeone} ";
        echo "Encrypt Code Two = {$encodetwo} ";

        $verify = password_verify($plaintextone,$encodetwo);

        if($verify){
            echo "oki";
        }else{
            echo "Failed";
        }

    }

    passworddecry();



    function passwordmd5($plaintext){

        // Message-Digest = md5(string,binary)
        // Note :: binary = TRUE/true / FALSE/false;
        // TRUE/true = RAW 16 characters binary format
        // FALSE/false = Default 32 character hax number

        $passcode1 = md5($plaintext); // static code
        echo "Before Encrypt = {$plaintext} , After Encrypt md5 = {$passcode1} "; // Before Bcrypt = password123 , Before Bcrypt = 482c811da5d5b4bc6d497ffa98491e38 32
        echo strlen($passcode1); // 32


        $passcode2 = md5($plaintext,FALSE); // static code
        echo "Before Bcrypt = {$plaintext} , After Encrypt md5 by FALSE = {$passcode2} "; // Before Bcrypt = password123 , After Encrypt md5 by FALSE = 482c811da5d5b4bc6d497ffa98491e38 32
        echo strlen($passcode2); // 32


        $passcode3 = md5($plaintext,TRUE); // static code
        echo "Before Bcrypt = {$plaintext} , After Encrypt md5 by FALSE = {$passcode3} "; // Before Bcrypt = password123 , After Encrypt md5 by FALSE = H,��մ�mI��I8 16
        echo strlen($passcode3); // 16
    }

    passwordmd5("password123");



    function passwordmd5verify($plaintext){

        $getpassword = "482c811da5d5b4bc6d497ffa98491e38";

        if($getpassword === md5($plaintext)){
            echo "Password match with 32 chars hax number";
        }elseif($getpassword === md5($plaintext,TRUE)){
            echo "Password match with 16 chars binary format";
        }else{
            echo "Password do not match";
        }
    }

    passwordmd5verify("password123");




    function passwordsha1($plaintext){

        // Secure Hash Algorithm = sha1(string,binary)
        // Note :: binary = TRUE/true / FALSE/false;
        // TRUE/true = RAW 20 characters binary format
        // FALSE/false = Default 40 character hax number

        $passcode1 = sha1($plaintext); // static code
        echo "Before Encrypt = {$plaintext} , After Encrypt sha1 = {$passcode1} "; // Before Encrypt = password123 , After Encrypt sha1 = cbfdac6008f9cab4083784cbd1874f76618d2a97 40
        echo strlen($passcode1); // 40


        $passcode2 = sha1($plaintext,FALSE); // static code
        echo "Before Bcrypt = {$plaintext} , After Encrypt sha1 by FALSE = {$passcode2} "; // Before Bcrypt = password123 , After Encrypt sha1 by FALSE = cbfdac6008f9cab4083784cbd1874f76618d2a97 40
        echo strlen($passcode2); // 40


        $passcode3 = sha1($plaintext,TRUE); // static code
        echo "Before Bcrypt = {$plaintext} , After Encrypt sha1 by FALSE = {$passcode3} "; // Before Bcrypt = password123 , After Encrypt sha1 by FALSE = ���`�ʴ7��чOva�*� 20
        echo strlen($passcode3); // 20
    }

    passwordsha1("password123");




    function passwordsha1verify($plaintext){

        $getpassword = "cbfdac6008f9cab4083784cbd1874f76618d2a97";

        if($getpassword === sha1($plaintext)){
            echo "Password match with 40 chars hax number";
        }elseif($getpassword === sha1($plaintext,TRUE)){
            echo "Password match with 20 chars binary format";
        }else{
            echo "Password do not match";
        }
    }

    passwordsha1verify("password123"); // Password match with 40 chars hax number



    function passwordcrypt($plaintext){
        // => crypt(string,key)

        $cryptkey = "456789ABCDEFG";
        $passcode = crypt($plaintext,$cryptkey); // static code
        echo "Before Encrypt = {$plaintext} , After Encrypt = {$passcode} ";
        echo strlen($passcode); // 13
    }

    passwordcrypt("password123"); // Before Encrypt = password123 , After Encrypt = 45X0h1uT9HvTw 13



   function passworddcryptverify($plaintext){

        $getpassword = "45X0h1uT9HvTw";
        $cryptkey = "456789ABCDEFG";

        if($getpassword === crypt($plaintext,$cryptkey)){
            echo "Password match";
        }else{
            echo "Password do not match";
        }
    }

    passworddcryptverify("password123");



    function strongpassword($plaintext){

        $cryptkey = "456789ABCDEFG";
        $newpassword = crypt(sha1(md5($plaintext)),$cryptkey); // Before Encrypt = password123 , After Encrypt = 45QUhSRh116Mw 13

        // $newpassword = md5($plaintext);
        // $newpassword = sha1($newpassword);
        // $newpassword = crypt($newpassword,$newpassword); // static // Before Encrypt = password123 , After Encrypt = 926wQBSqLwkTE 13


        echo "Before Encrypt = {$plaintext} , After Encrypt = {$newpassword} ";
        echo strlen($newpassword); // 13
    }

    strongpassword("password123");


    function strongpasswordverify($plaintext){

        $getpassword = "45QUhSRh116Mw";
        $cryptkey = "456789ABCDEFG";


        if($getpassword === crypt(sha1(md5($plaintext)),$cryptkey)){
            echo "Password match";
        }else{
            echo "Password do not match";
        }



        // $getpassword = "926wQBSqLwkTE";

        // if($getpassword === crypt(sha1(md5($plaintext)),sha1(md5($plaintext)))){
        //     echo "Password match";
        // }else{
        //     echo "Password do not match";
        // }


    }

    strongpasswordverify("password123");


?>