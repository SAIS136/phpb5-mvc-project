<?php

class Article{

    private $db;

    public function __construct(){
        $this->db = new SystemDatabase();
    }

    public function allarticles(){

        $this->db->dbquery("SELECT * ,
            articles.id AS articleid,
            articles.created_at AS publicdate
            FROM articles
            INNER JOIN users
            ON articles.user_id = users.id
            ORDER BY articles.created_at DESC
        ");
        $rows = $this->db->getmultidataobj();
        return $rows;
    }

    public function createarticle($data){

        $this->db->dbquery("INSERT INTO articles(image,title,content,category_id,status_id,user_id) VALUE (:image,:title,:content,:category_id,:status_id,:user_id)");

        $this->db->dbbind(':image',$data['image']);
        $this->db->dbbind(':title',$data['title']);
        $this->db->dbbind(':content',$data['content']);
        $this->db->dbbind(':category_id',$data['category_id']);
        $this->db->dbbind(':status_id',$data['status_id']);
        $this->db->dbbind(':user_id',$data['user_id']);

        if($this->db->dbexecute()){
            return true;
        }else{
            return false;
        }

    }

    public function getarticlebyid($id){

        $this->db->dbquery("SELECT * FROM articles WHERE id=:id");
        $this->db->dbbind(':id',$id);

        $row = $this->db->getsingledataassoc();

        return $row;

    }

    public function updatearticle($data){

        $this->db->dbquery("UPDATE articles set image=:image,title=:title,content=:content,category_id=:category_id,status_id=:status_id WHERE id=:id");

        $this->db->dbbind(':id',$data['id']);
        $this->db->dbbind(':image',$data['image']);
        $this->db->dbbind(':title',$data['title']);
        $this->db->dbbind(':content',$data['content']);
        $this->db->dbbind(':category_id',$data['category_id']);
        $this->db->dbbind(':status_id',$data['status_id']);

        if($this->db->dbexecute()){
            return true;
        }else{
            return false;
        }

    }

    public function deletearticle($id){

        $this->db->dbquery("DELETE FROM articles WHERE id=:id");
        $this->db->dbbind(':id',$id);

        if($this->db->dbexecute()){
            return true;
        }else{
            return false;
        }

    }

    public function getpagination($limit,$offset){

        // $this->db->dbquery("SELECT * FROM articles LIMIT :limit OFFSET :offset");

        $this->db->dbquery("SELECT * ,
            articles.id AS articleid,
            articles.created_at AS publicdate
            FROM articles
            INNER JOIN users
            ON articles.user_id = users.id
            ORDER BY articles.created_at DESC
            LIMIT :limit OFFSET :offset
        ");

        $this->db->dbbind(":limit",$limit);
        $this->db->dbbind(":offset",$offset);

        $rows = $this->db->getmultidataassoc();
        return $rows;
    }

    public function gettotalarticles(){
        $this->db->dbquery("SELECT COUNT(*) AS total FROM articles");
        return $this->db->getsingledataassoc()["total"];
    }

}

?>
<!--
CREATE TABLE IF NOT EXISTS articles(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    image VARCHAR(255) DEFAULT NULL,
    title VARCHAR(255),
    content TEXT,
    category_id INT UNSIGNED NOT NULL,
    status_id INT UNSIGNED NOT NULL,
    user_id INT,
    created_at TIMESTAMP DEFAULT now(),
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY(user_id) REFERENCES users(id) ON UPDATE CASCADE ON DELETE CASCADE
);

DESC articles;
-->
