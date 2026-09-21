<?php

class WelcomesController extends SystemController{

    private $articlemodel;
    private $mainmodel;

    public function __construct(){
        $this->mainmodel = $this->model('Welcome');
        $this->articlemodel = $this->model('Article');
    }

    public function index(){

        $limit = 4; // number of articles per page
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

        return $this->view('welcomes/index',$datas);

    }

    public function about(){

        $datas = [
            "title"=>"Welcome Page"
        ];

        return $this->view('welcomes/about',$datas);

    }

    public function property(){

    }

    public function service(){

    }

    public function customer(){

    }

    public function furniture(){

    }

    public function contact(){

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

?>


<!-- modifier        same class          sub class       outside
public          yes                 yes             yes
protected       yes                 yes             no
private         yes                 no              no -->
