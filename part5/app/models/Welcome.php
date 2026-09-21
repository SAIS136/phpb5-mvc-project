<?php

class Welcome{

    private $db;

    public function __construct(){
        $this->db = new SystemDatabase();
    }


}

?>