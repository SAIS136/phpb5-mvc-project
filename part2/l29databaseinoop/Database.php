<?php

require_once("config/access.php");


class Database{

    private $dbhost = DB_HOST;
    private $dbuser = DB_USER;
    private $dbpass = DB_PASS;
    private $dbname = DB_NAME;

    private $conn;
    private $error;
    private $stmt;
    private $dbconnected = false;


    public function __construct(){

        try{

            $this->conn = new PDO("mysql:host=$this->dbhost;dbname=$this->dbname",$this->dbuser,$this->dbpass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        }catch(PDOException $e){
            $this->error = $e->getMessage();
        }
    }

    // Get PDO error
    public function geterror(){
        return $this->error;
    }

    // check database connected
    public function isconnected(){
        return $this->dbconnected;
    }

    // prepare with query
    public function dbquery($query){
        $this->stmt = $this->conn->prepare($query);
    }

    // query binding
    public function dbbind($param,$value,$type=null){
        if(is_null($type)){
            switch(true){
                case is_string($value):
                    $type = PDO::PARAM_STR;
                    break;
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
            }
        }

        // $this->stmt->bindParam($param,$value,$type);
        $this->stmt->bindValue($param,$value,$type);


    }

    // execute after prepare
    public function dbexecute(){
        return $this->stmt->execute();
    }

    // get all results as array object
    public function getmultidata(){
        $this->dbexecute();
        // return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // get single results as array object
    public function getsingledata(){
        $this->dbexecute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
        // return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // get database row count
    public function dbrowcount(){
        return $this->stmt->rowCount();
    }

}



?>

<!--

CREATE TABLE IF NOT EXISTS articles(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    title VARCHAR(255),
    content TEXT,
    user_id INT
);


CREATE TABLE IF NOT EXISTS users(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    name VARCHAR(30),
    email VARCHAR(50),
    password VARCHAR(50)
);

DESC articles;
DESC users;

SHOW INDEX FROM articles;
SHOW INDEX FROM users;

 -->
