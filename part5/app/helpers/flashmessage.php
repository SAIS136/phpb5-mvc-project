<?php

function flash($sessionname="",$message="",$class="alert alert-success"){

    if(!empty($sessionname)){

        if(empty($_SESSION[$sessionname]) && !empty($message)){

            $_SESSION[$sessionname] = $message; // register_success
            $_SESSION[$sessionname.'_class'] = $class; // register_success_class = alert-success

        }elseif(!empty($_SESSION[$sessionname]) && empty($message)){

            echo '<div class="'.$_SESSION[$sessionname.'_class'].'" >'.$_SESSION[$sessionname].'</div>';

            unset($_SESSION[$sessionname]);
            unset($_SESSION[$sessionname.'_class']);

        }

    }

}


?>

<!--

=>set
flash("login_success","You have successfully logged in!","alert alert-success");

=>display
flash("login_success");

-->