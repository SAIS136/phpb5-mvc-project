<?php

class UsersController extends SystemController{

    private $usermodel;

    public function __construct(){
        $this->usermodel = $this->model('User');
    }

    public function register(){

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            // to prevent cross-site Scripting (XSS) attacks by HTML and Javascript Code
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $datas = [
                "fullname"=>textfilter($_POST['fullname'] ?? ''),
                "email"=>textfilter($_POST['email'] ?? ''),
                "password"=>textfilter($_POST['password'] ?? ''),
                "cfmpassword"=>textfilter($_POST['cfmpassword'] ?? ''),
                "fullnameerr"=>"",
                "emailerr"=>"",
                "passworderr"=>"",
                "cfmpassworderr"=>"",
            ];

            // validate fullname
            if(empty($datas['fullname'])){
                $datas["fullnameerr"] = "Please enter fullname";
            }

            // validate email
            if(empty($datas['email'])){
                $datas["emailerr"] = "Please enter your email";
            }elseif(!filter_var($datas['email'],FILTER_VALIDATE_EMAIL)){
                $datas["emailerr"] = "Please enter valid email address";
            }else{
                // check email already exists or not
                if($this->usermodel->checkuniqueemail($datas['email'])){
                    $datas['emailerr'] = "This email is already registered";
                }
            }

            // validate password
            if(empty($datas['password'])){
                $datas["passworderr"] = "Please enter a password";
            }elseif(strlen($datas['password']) < 5){
                $datas["passworderr"] = "Password must be at least 5 characters.";
            }

            // validate cfmpassword
            if(empty($datas['cfmpassword'])){
                $datas["cfmpassworderr"] = "Please comfirm your password";
            }elseif($datas['cfmpassword'] !== $datas['password']){
                $datas['cfmpassworderr'] = "Please do not match.";
            }

            if(
                empty($datas['fullnameerr']) &&
                empty($datas['emailerr']) &&
                empty($datas['passworderr']) &&
                empty($datas['cfmpassworderr'])
            ){

                // hash the password
                $datas['password'] = password_hash($datas['password'],PASSWORD_DEFAULT);

                // register the user

                if($this->usermodel->register($datas)){
                    flash("register_success","You have successfully registered!");
                    redirect("users/login");
                }else{
                    die("Something went wrong while registering.");
                }


            }else{

                // load the view with validation errors
                return $this->view('users/register',$datas);
            }

        }else{
            $datas = [
                "fullname"=>"",
                "email"=>"",
                "password"=>"",
                "cfmpassword"=>"",
                "fullnameerr"=>"",
                "emailerr"=>"",
                "passworderr"=>"",
                "cfmpassworderr"=>"",
            ];

            return $this->view('users/register',$datas);

        }

    }

    public function login(){

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            // to prevent cross-site Scripting (XSS) attacks by HTML and Javascript Code
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $datas = [
                "email"=>textfilter($_POST['email'] ?? ''),
                "password"=>textfilter($_POST['password'] ?? ''),
                "emailerr"=>"",
                "passworderr"=>"",
            ];


            // validate email
            if(empty($datas['email'])){
                $datas["emailerr"] = "Please enter your email";
            }elseif(!filter_var($datas['email'],FILTER_VALIDATE_EMAIL)){
                $datas["emailerr"] = "Please enter valid email address";
            }elseif(!$this->usermodel->checkuniqueemail($datas['email'])){
                // check email already exists or not
                $datas['emailerr'] = "No user found with this email";

            }

            // validate password
            if(empty($datas['password'])){
                $datas["passworderr"] = "Please enter a password";
            }

            if(empty($datas['emailerr']) && empty($datas['passworderr'])){

                $loginuser = $this->usermodel->login($datas['email'],$datas['password']);

                if($loginuser){

                    // set online
                    $this->usermodel->setonlinestatus($loginuser['id']);

                    $this->createusersession($loginuser);


                }else{
                    $datas['passworderr'] = "Password incorrect.";
                    return $this->view('users/login',$datas);
                }

            }else{

                // Error Sending
                return $this->view('users/login',$datas);
            }

        }else{
            $datas = [
                "email"=>"",
                "password"=>"",
                "emailerr"=>"",
                "passworderr"=>"",
            ];

            return $this->view('users/login',$datas);

        }

    }

    public function logout(){

        // set offline
        $this->usermodel->setofflinestatus($_SESSION['user_id']);

        unset($_SESSION['user_id']);
        unset($_SESSION['user_name']);
        unset($_SESSION['user_email']);

        session_destroy();

        redirect('users/login');

    }

    public function createusersession($user){

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        $_SESSION['user_email'] = $user['email'];

        redirect("welcomes/index");

    }

    public function whoisonline(){

        $onlineusers = $this->usermodel->getonlineusers();
        $offlineusers = $this->usermodel->getofflineusers();

        $datas = [
            "onlineusers"=>$onlineusers,
            "offlineusers"=>$offlineusers
        ];

        return $this->view('users/whoisonline',$datas);

    }

}

?>