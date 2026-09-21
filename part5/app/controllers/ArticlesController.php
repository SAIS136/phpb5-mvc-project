<?php

class ArticlesController extends SystemController{

    private $articlemodel;
    private $categorymodel;
    private $statusmodel;
    private $usermodel;


    public function __construct(){

        if(!authcheck()){
            redirect('user/login');
        }else{
            $this->articlemodel = $this->model('Article');
            $this->categorymodel = $this->model('Category');
            $this->statusmodel = $this->model('Status');
            $this->usermodel = $this->model('User');
        }

    }

    public function index(){

        // => Without Pagination

        // $articles = $this->articlemodel->allarticles();

        // $datas = [
        //     'articles'=>$articles
        // ];

        // return $this->view('articles/index',$datas);


        // => With Pagination (http://localhost/phpbatch16/part5/articles?page=2)

        $limit = 3; // number of articles per page
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $offset = ($page - 1) * $limit; // page=1 article 123
        $totalcount = $this->articlemodel->gettotalarticles();
        $totalpages = ceil($totalcount/$limit);

        $articles = $this->articlemodel->getpagination($limit,$offset);

        $datas = [
            'articles'=>$articles,
            'page'=>$page,
            'totalpages'=>$totalpages
        ];

        return $this->view('articles/index',$datas);



    }

    public function create(){

        if($_SERVER['REQUEST_METHOD'] == "POST"){

            // to prevent cross-site Scripting (XSS) attacks by HTML and Javascript Code
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $categories = $this->categorymodel->allcategories();
            $statuses = $this->statusmodel->allstatuses();

            $datas = [
                "image"=>$_FILES['image']['name'],
                "title"=> textfilter($_POST['title'] ?? ''),
                "content"=> textfilter($_POST['content'] ?? ''),
                "category_id"=> textfilter($_POST['category_id'] ?? ''),
                "status_id"=> textfilter($_POST['status_id'] ?? ''),
                "user_id"=> $_SESSION['user_id'],
                "imageerr"=> "",
                "titleerr"=> "",
                "contenterr"=> "",
                "categories"=> $categories,
                "category_iderr"=> "",
                "statuses"=> $statuses,
                "status_iderr"=> ""
            ];

            // validate fullname
            if(empty($datas['image'])){
                $datas["imageerr"] = "Please insert image.";
            }

            if(empty($datas['title'])){
                $datas["titleerr"] = "Please enter title.";
            }

            if(empty($datas['content'])){
                $datas["contenterr"] = "Please enter content.";
            }

            if(empty($datas['category_id'])){
                $datas["category_iderr"] = "Please choose category.";
            }

            if(empty($datas['status_id'])){
                $datas["status_iderr"] = "Please choose status.";
            }

            // no error
            if(
                empty($datas['imageerr']) &&
                empty($datas['titleerr']) &&
                empty($datas['contenterr']) &&
                empty($datas['category_iderr']) &&
                empty($datas["status_iderr"])){

                // upload image

                $getroot = dirname(dirname(dirname(__FILE__)));
                $uploaddir = $getroot."/public/assets/images/";
                $newfilename = $datas['user_id'].time().basename($_FILES['image']['name']);
                $uploadfile = $uploaddir.$newfilename;

                if(move_uploaded_file($_FILES['image']['tmp_name'],$uploadfile)){
                    $datas['image'] = $newfilename;
                }else{
                    die("Uploading Failed !!!");
                }

                if($this->articlemodel->createarticle($datas)){
                    flash("article_success","New Article Created!");
                    redirect("articles");
                }else{
                    die("Something went wrong !!!");
                }

            }else{
                // load the view with validation errors
                return $this->view('articles/create',$datas);
            }

        }else{

            $categories = $this->categorymodel->allcategories();
            $statuses = $this->statusmodel->allstatuses();

            $datas = [
                "image"=>"",
                "title"=>"",
                "content"=>"",
                "categories"=> $categories,
                "statuses"=> $statuses
            ];

            return $this->view('articles/create',$datas);

        }


    }

    public function show($id){

        $article = $this->articlemodel->getarticlebyid($id);
        $user = $this->usermodel->getuserbyid($article['user_id']);
        $category = $this->categorymodel->getcategorybyid($article['category_id']);
        $status = $this->statusmodel->getstatusbyid($article['status_id']);

        $datas = [
            "article"=> $article,
            "category"=> $category,
            "status"=> $status,
            "user"=> $user

        ];

        return $this->view('articles/show',$datas);

    }

    public function edit($id){

        if($_SERVER['REQUEST_METHOD'] == "POST"){

            // to prevent cross-site Scripting (XSS) attacks by HTML and Javascript Code
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $categories = $this->categorymodel->allcategories();
            $statuses = $this->statusmodel->allstatuses();

            $datas = [
                "id"=>$id,
                "image"=>$_POST['old_image'],
                "title"=> textfilter($_POST['title'] ?? ''),
                "content"=> textfilter($_POST['content'] ?? ''),
                "category_id"=> textfilter($_POST['category_id'] ?? ''),
                "status_id"=> textfilter($_POST['status_id'] ?? ''),
                "user_id"=> $_SESSION['user_id'],
                "imageerr"=> "",
                "titleerr"=> "",
                "contenterr"=> "",
                "categories"=> $categories,
                "category_iderr"=> "",
                "statuses"=> $statuses,
                "status_iderr"=> ""
            ];

            // validate fullname

            if(empty($datas['title'])){
                $datas["titleerr"] = "Please enter title.";
            }

            if(empty($datas['content'])){
                $datas["contenterr"] = "Please enter content.";
            }

            if(empty($datas['category_id'])){
                $datas["category_iderr"] = "Please choose category.";
            }

            if(empty($datas['status_id'])){
                $datas["status_iderr"] = "Please choose status.";
            }

            // no error
            if(
                empty($datas['titleerr']) &&
                empty($datas['contenterr']) &&
                empty($datas['category_iderr']) &&
                empty($datas["status_iderr"])){

                // upload image

                if(!empty($_FILES['image']['name'])){

                    $getroot = dirname(dirname(dirname(__FILE__)));
                    $uploaddir = $getroot."/public/assets/images/";
                    $newfilename = $datas['user_id'].time().basename($_FILES['image']['name']);
                    $uploadfile = $uploaddir.$newfilename;

                    // remove old image

                    $getoldimage = $uploaddir.$_POST['old_image'];

                    if(file_exists($getoldimage)){
                        unlink($getoldimage);
                    }

                    // upload new image

                    if(move_uploaded_file($_FILES['image']['tmp_name'],$uploadfile)){
                        $datas['image'] = $newfilename;
                    }else{
                        die("Uploading Failed !!!");
                    }

                }else{
                    // get old image

                    $datas['image'] = $_POST['old_image'];

                }

                if($this->articlemodel->updatearticle($datas)){
                    flash("article_success","New Article Created!");
                    redirect("articles");
                }else{
                    die("Something went wrong !!!");
                }

            }else{
                // load the view with validation errors
                return $this->view('articles/edit',$datas);
            }

        }else{

            $article = $this->articlemodel->getarticlebyid($id);
            $categories = $this->categorymodel->allcategories();
            $statuses = $this->statusmodel->allstatuses();

            // check article owner
            if($article['user_id'] != $_SESSION['user_id']){
                redirect('articles');
            }

            $datas = [
                "id"=>$id,
                "image"=> $article['image'],
                "title"=> $article['title'],
                "content"=> $article['content'],
                "category_id"=> $article['category_id'],
                "status_id"=> $article['status_id'],
                "categories"=> $categories,
                "statuses"=> $statuses
            ];

            return $this->view('articles/edit',$datas);

        }

    }

    public function update($id){
        echo "I am Article Update Page = ID is $id <br/>";
    }

    public function destroy($id){

        if($_SERVER['REQUEST_METHOD'] == "POST"){

            $article = $this->articlemodel->getarticlebyid($id);

            // check status owner
            if($article["user_id"] != $_SESSION['user_id']){
                redirect("articles");
            }

            $getroot = dirname(dirname(dirname(__FILE__)));
            $uploaddir = $getroot."/public/assets/images/";
            $getoldimage = $uploaddir.$article['image'];

            if(file_exists($getoldimage)){
                unlink($getoldimage);
            }

            if($this->articlemodel->deletearticle($id)){
                flash("article_success","Deleted Successfully!");
                redirect("articles");
            }else{
                die("Something went wrong !!!");
            }

        }else{
            redirect("articles");
        }

    }

}

?>