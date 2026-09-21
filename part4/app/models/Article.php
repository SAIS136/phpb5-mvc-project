<?php

// require_once '../libraries/SystemDatabase.php';

class Article{

    private $db;

    public function __construct(){
        // echo "i am Article Model <br/>";

        $this->db = new SystemDatabase();
    }

    public function getarticles(){
        $this->db->dbquery("SELECT * FROM articles");
        return $this->db->getmultidataobj();
    }


}

// new Article();





?>