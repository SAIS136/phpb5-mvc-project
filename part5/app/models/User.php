<?php

class User{

    private $db;

    public function __construct(){
        $this->db = new SystemDatabase();
    }

    public function register($data){

        $this->db->dbquery("INSERT INTO users(name,email,password) VALUE (:name,:email,:password)");

        $this->db->dbbind(":name",$data['fullname']);
        $this->db->dbbind(":email",$data['email']);
        $this->db->dbbind(":password",$data['password']);

        if($this->db->dbexecute()){
            return true;
        }else{
            return false;
        }

    }


    public function checkuniqueemail($email){

        $this->db->dbquery("SELECT * FROM users WHERE email=:email");
        $this->db->dbbind(":email",$email);

        $row = $this->db->getsingledataassoc();


        if($this->db->dbrowcount() > 0){
            return true;
        }else{
            return false;
        }

    }


    public function login($email,$password){

        $this->db->dbquery("SELECT * FROM users WHERE email=:email");
        $this->db->dbbind(":email",$email);

        $row = $this->db->getsingledataassoc();

        $hashedpassword = $row['password'];

        if(password_verify($password,$hashedpassword)){
            return $row;
        }else{
            return false;
        }

    }

    public function getuserbyid($id){
        $this->db->dbquery("SELECT * FROM users WHERE id=:id");
        $this->db->dbbind(':id',$id);

        $row = $this->db->getsingledataassoc();

        return $row;

    }

    public function getonlineusers(){
        $results = $this->db->dbquery("SELECT name,status,lastactivity FROM users WHERE status='online'");
        $results = $this->db->getmultidataassoc();
        return $results;
    }

    public function getofflineusers(){
        $results = $this->db->dbquery("SELECT name,status,lastactivity FROM users WHERE status='offline'");
        $results = $this->db->getmultidataassoc();
        return $results;
    }

    public function setonlinestatus($userid){
        $this->db->dbquery("UPDATE users SET status = 'online' where id=:id");
        $this->db->dbbind(":id",$userid);

        if($this->db->dbexecute()){
            return true;
        }else{
            return false;
        }

    }

    public function setofflinestatus($userid){
        $this->db->dbquery("UPDATE users SET status = 'offline' where id=:id");
        $this->db->dbbind(":id",$userid);

        if($this->db->dbexecute()){
            return true;
        }else{
            return false;
        }

    }

}

?>

<!--
ALTER TABLE users
ADD COLUMN status ENUM('online','offline') DEFAULT 'offline' AFTER password,
ADD COLUMN lastactivity TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP AFTER status;
 -->
