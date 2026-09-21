<?php

class SubscribesController extends SystemController{

    private $subscribemodel;

    public function __construct(){

        if(!authcheck()){
            redirect('users/login');
        }else{
            $this->subscribemodel = $this->model('Subscribe');
        }

    }

    public function index(){

        $subscribes = $this->subscribemodel->allsubscribes();

        $datas = [
            'subscribes'=>$subscribes
        ];

        return $this->view('subscribes/index',$datas);

    }

    public function create(){

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            // to prevent cross-site Scripting (XSS) attacks by HTML and Javascript Code
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $datas = [
                "name"=>textfilter($_POST['name'] ?? ''),
                "email"=>textfilter($_POST['email'] ?? ''),
                "status_id"=>textfilter($_POST['status_id'] ?? ''),
                "nameerr"=>"",
                "emailerr"=>"",
                "status_iderr"=>""
            ];

            if($this->subscribemodel->createsubscribe($datas)){
                flash('subscribe_success','Subscribe Created');
                redirect('welcomes/index');
            }else{
                die("Error Found!!!");
            }

        }else{
            $datas = [
                "name"=>"",
                "email"=>"",
                "nameerr"=>"",
                "emailerr"=>"",
                "status_iderr"=>""
            ];

            return $this->view('welcomes/index',$datas);

        }


    }


}

?>