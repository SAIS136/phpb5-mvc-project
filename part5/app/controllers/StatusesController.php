<?php

class StatusesController extends SystemController{

    private $statusmodel;
    private $usermodel;


    public function __construct(){

        if(!authcheck()){
            redirect('user/login');
        }else{
            $this->statusmodel = $this->model('Status');
            $this->usermodel = $this->model('User');
        }

    }

    public function index(){

        $statuses = $this->statusmodel->allstatuses();

        $datas = [
            'statuses'=>$statuses
        ];

        return $this->view('statuses/index',$datas);

    }

    public function create(){

        if($_SERVER['REQUEST_METHOD'] == "POST"){

            // to prevent cross-site Scripting (XSS) attacks by HTML and Javascript Code
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $datas = [
                "name"=>textfilter($_POST['name'] ?? ''),
                "user_id"=> $_SESSION['user_id'],
                "nameerr"=> ""
            ];

            // validate fullname
            if(empty($datas['name'])){
                $datas["nameerr"] = "Please enter status name.";
            }

            // no error
            if(empty($datas['nameerr'])){

                if($this->statusmodel->createstatus($datas)){
                    flash("status_success","New Status Created!");
                    redirect("statuses");
                }else{
                    die("Something went wrong !!!");
                }

            }else{
                // load the view with validation errors
                return $this->view('statuses/create',$datas);
            }

        }else{

            $datas = [
                "name"=>""
            ];

        }

        return $this->view('statuses/create',$datas);
    }

    public function show($id){
        echo "I am Article Show Page = ID is $id <br/>";
    }

    public function edit($id){

        if($_SERVER['REQUEST_METHOD'] == "POST"){

            // to prevent cross-site Scripting (XSS) attacks by HTML and Javascript Code
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $datas = [
                "id"=>$id,
                "name"=>textfilter($_POST['name'] ?? ''),
                "user_id"=> $_SESSION['user_id'],
                "nameerr"=> ""
            ];

            // validate fullname
            if(empty($datas['name'])){
                $datas["nameerr"] = "Please enter status name.";
            }

            // no error
            if(empty($datas['nameerr'])){

                if($this->statusmodel->updatestatus($datas)){
                    flash("status_success","Status Updated!");
                    redirect("statuses");
                }else{
                    die("Something went wrong !!!");
                }


            }else{
                // load the view with validation errors
                return $this->view('statuses/edit',$datas);
            }

        }else{

            $status = $this->statusmodel->getstatusbyid($id);

            // check status owner
            if($status["user_id"] != $_SESSION['user_id']){
                redirect("statuses");
            }

            $datas = [
                "id"=>$id,
                "name"=>$status['name']
            ];

            return $this->view('statuses/edit',$datas);

        }

        return $this->view('statuses/edit',$datas);

    }

    public function update($id){
        echo "I am Article Update Page = ID is $id <br/>";
    }

    public function destroy($id){

        if($_SERVER['REQUEST_METHOD'] == "POST"){

            $status = $this->statusmodel->getstatusbyid($id);

            // check status owner
            if($status["user_id"] != $_SESSION['user_id']){
                redirect("statuses");
            }

            if($this->statusmodel->deletestatus($id)){
                flash("status_success","Deleted Successfully!");
                redirect("statuses");
            }else{
                die("Something went wrong !!!");
            }

        }else{
            redirect("statuses");
        }

    }

}

?>