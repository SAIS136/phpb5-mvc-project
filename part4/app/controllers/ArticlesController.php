<?php

// require_once "../libraries/SystemController.php";

class ArticlesController extends SystemController{

    private $mainmodel;

    public function __construct(){
        // echo "i am ArticleController";
        $this->mainmodel = $this->model('Article');
    }

    public function index(){
        // echo "I am Article Index Page";

        // return $this->view('articles/index');

        // return $this->view('articles/index'["greeting"=>"HelloSir!]);

        // $datas = [
        //     "greeting"=>"Have a day Sir!"
        // ];
        // return $this->view('articles/index',$datas);

        $articles = $this->mainmodel->getarticles();

        $datas = [
            "greeting"=>"Have a day Sir!",
            "caption"=>"We got all Articles here!!",
            'articles'=>$articles
        ];

        return $this->view('articles/index',$datas);

    }

    public function create(){
        echo "I am Article Create Page <br/>";
    }

    public function show($id){
        echo "I am Article Show Page = ID is $id <br/>";
    }

    public function edit($id){
        echo "I am Article Edit Page = ID is $id <br/>";
    }

    public function update($id){
        echo "I am Article Update Page = ID is $id <br/>";
    }

    public function destroy($id){
        echo "I am Article Destroy Page = ID is $id <br/>";
    }

}

// new ArticlesController();






?>