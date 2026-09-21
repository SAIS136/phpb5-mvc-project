<?php

// Note :: Cookies store on User's Current Browser

echo time();

echo "<br/>";
            // s m hr day
echo time()+(60*60*24*2); // 2 Days

echo "<br/>";

echo time()+(86400*2); // 2 Days


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cookies</title>
    </head>
    <body>
        <ul>
            <li><a href="./cookiesset.php" target="_blank">Set Cookies</a></li>
            <li><a href="./cookiesread.php" target="_blank">Read Cookies</a></li>
            <li><a href="./cookiesdelete.php" target="_blank">Delete Cookies</a></li>
            <li><a href="./other/cookiesset2.php" target="_blank">Set Cookies 2</a></li>
            <li><a href="./other/cookieread2.php" target="_blank">Set Cookies 2</a></li>
        </ul>
    </body>
</html>