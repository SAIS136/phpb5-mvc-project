<?php

    // Config
    require_once "config/config.php";

    // Load Helpers
    require_once "helpers/sessionconfig.php";
    require_once "helpers/flashmessage.php";
    require_once "helpers/redirect.php";
    require_once "helpers/textfilter.php";



    // Libraries (Autoload)
    spl_autoload_register(function($classname){
        require_once ("libraries/".$classname.".php");
    });



?>