<?php

session_start();

// => Single Destory Session

// unset($_SESSION['idxcount']);
// echo "Session Destory Successfully";

// => All Destory Session

session_destroy();
echo "All Session Destory Successfully";


?>

