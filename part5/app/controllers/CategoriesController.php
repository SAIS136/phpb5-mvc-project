<?php

class CategoriesController extends SystemController{

    private $categorymodel;
    private $statusmodel;
    private $usermodel;


    public function __construct(){

        if(!authcheck()){
            redirect('user/login');
        }else{
            $this->categorymodel = $this->model('Category');
            $this->statusmodel = $this->model('Status');
            $this->usermodel = $this->model('User');
        }

    }

    public function index(){

        $categories = $this->categorymodel->allcategories();

        $datas = [
            'categories'=>$categories
        ];

        return $this->view('categories/index',$datas);

    }

    public function create(){

        if($_SERVER['REQUEST_METHOD'] == "POST"){

            // to prevent cross-site Scripting (XSS) attacks by HTML and Javascript Code
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $statuses = $this->statusmodel->allstatuses();

            $datas = [
                "name"=>textfilter($_POST['name'] ?? ''),
                "status_id"=> textfilter($_POST['status_id'] ?? ''),
                "user_id"=> $_SESSION['user_id'],
                "nameerr"=> "",
                "status_iderr"=> "",
                "statuses"=> $statuses
            ];

            // validate fullname
            if(empty($datas['name'])){
                $datas["nameerr"] = "Please enter category name.";
            }

            if(empty($datas['status_id'])){
                $datas["status_iderr"] = "Please choose status.";
            }

            // no error
            if(empty($datas['nameerr']) && empty($datas["status_iderr"])){

                if($this->categorymodel->createcategory($datas)){
                    flash("category_success","New Category Created!");
                    redirect("categories");
                }else{
                    die("Something went wrong !!!");
                }

            }else{
                // load the view with validation errors
                return $this->view('categories/create',$datas);
            }

        }else{

            $statuses = $this->statusmodel->allstatuses();

            $datas = [
                "name"=>"",
                "statuses"=>$statuses
            ];

            return $this->view('categories/create',$datas);

        }

    }

    public function show($id){
        echo "I am Article Show Page = ID is $id <br/>";
    }

    public function edit($id){

        if($_SERVER['REQUEST_METHOD'] == "POST"){

            // to prevent cross-site Scripting (XSS) attacks by HTML and Javascript Code
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $statuses = $this->statusmodel->allstatuses();

            $datas = [
                "id"=>$id,
                "name"=>textfilter($_POST['name'] ?? ''),
                "status_id"=>textfilter($_POST['status_id'] ?? ''),
                "user_id"=> $_SESSION['user_id'],
                "nameerr"=> "",
                "status_iderr"=> "",
                "statuses"=>$statuses
            ];

            // validate fullname
            if(empty($datas['name'])){
                $datas["nameerr"] = "Please enter category name.";
            }

            if(empty($datas['status_id'])){
                $datas["status_iderr"] = "Please choose status.";
            }

            // no error
            if(empty($datas['nameerr']) && empty($datas['status_iderr'])){

                if($this->categorymodel->updatecategory($datas)){
                    flash("category_success","Category Updated!");
                    redirect("categories");
                }else{
                    die("Something went wrong !!!");
                }


            }else{
                // load the view with validation errors
                return $this->view('categories/edit',$datas);
            }

        }else{

            $category = $this->categorymodel->getcategorybyid($id);
            $statuses = $this->statusmodel->allstatuses();

            // check category owner
            if($category["user_id"] != $_SESSION['user_id']){
                redirect("categories");
            }

            $datas = [
                "id"=>$id,
                "name"=>$category["name"],
                "status_id"=>$category["status_id"],
                "statuses"=>$statuses
            ];

            return $this->view('categories/edit',$datas);

        }

        // return $this->view('categories/edit',$datas);

    }

    public function update($id){
        echo "I am Article Update Page = ID is $id <br/>";
    }

    public function destroy($id){

        if($_SERVER['REQUEST_METHOD'] == "POST"){

            $status = $this->categorymodel->getcategorybyid($id);

            // check status owner
            if($status["user_id"] != $_SESSION['user_id']){
                redirect("categories");
            }

            if($this->categorymodel->deletecategory($id)){
                flash("category_success","Deleted Successfully!");
                redirect("categories");
            }else{
                die("Something went wrong !!!");
            }

        }else{
            redirect("categories");
        }

    }

}

?>