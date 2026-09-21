<?php

ini_set('display_errors',1);

// Note :: Abstract method can't include body
// Note :: Any Modifier can set in abstract
// Note :: To use an abstract method, a class must use to extends keyword.
// Note :: A class that extends sub calss  must extends all of the abstract's methods.
// Note :: Can contain non-static / static properties / common methods and contain constant variable.
// Note :: When we set abstarct method !!! class must be abstract calss as well



// Class Object
abstract class Myabstractmethod{

    public $id = 50;
    public static $notifi = "New Article Created";
    const TITLE = "This is a new article for SPORT";

    // Common Method

    public function createpost(){
        echo "I am from create post . Post title is = ".self::TITLE . "<br/>";
    }

    public function readpost(){
        echo "I am read post . ID is = ". $this->id . "<br/>";
    }

    abstract public function updatepost($id,$title);


    public function deletepost($id){
        echo "I am delete post . ID is = {$id}" . "<br/>";
    }

}

class Article extends Myabstractmethod{

    public function updatepost($id,$title){
        echo "I am from update . ID is {$id}. Title is {$title}. <br/>";
    }


}





echo "This is Abstract Method <br/>";

// ERROR :: We can't instantiate abstract class
// $obj1 = new Myabstractmethod();

$obj2 = new Article();
echo $obj2->id; // 50
echo "<br/>";
echo $obj2::$notifi; // New Article Created
echo "<br/>";
echo $obj2::TITLE; // This is a new article for SPORT
echo "<br/>";

$obj2->createpost(); // I am from create post . Post title is = This is a new article for SPORT
$obj2->readpost(); // I am read post . ID is = 50
$obj2->updatepost(20,"This is new post 20"); // I am from update . ID is 20. Title is This is new post 20.
$obj2->deletepost(100); // I am delete post . ID is = 100

echo "<hr/>";

abstract class Into{

    abstract protected function name();
    abstract protected function age();
    abstract protected function professional($gender);

    public function getname(){
        return $this->name();
    }

    public function getage(){
        return $this->age();
    }

    public function getprofessional($sex){
        return $this->professional($sex);
    }

}

class Boyclass extends Into{

    protected function name(){
        return "Ko Ko";
    }

    protected function age(){
        return 25;
    }

    protected function professional($gender){

        switch($gender){
            case "male":
                $job = "Engineer";
                break;
            case "female":
                $job = "Doctor";
                break;
            default:
                $job = "Developer";
                break;
        }

        return $job;

    }

}

class Girlclass extends Into{

    protected function name(){
        return "Hsu Hsu";
    }

    protected function age(){
        return 25;
    }

    protected function professional($gender){

        switch($gender){
            case "male":
                $job = "Engineer";
                break;
            case "female":
                $job = "Doctor";
                break;
            default:
                $job = "Developer";
                break;
        }

        return $job;

    }

}

$boyobj = new Boyclass();
$boyname = $boyobj->getname();
$boyage = $boyobj->getage();
$boypro = $boyobj->getprofessional('male');

echo "{$boyname} is {$boyage} years old & he is an {$boypro} .<br/>"; // Ko Ko is 25 years old & he is an Engineer .

echo "<hr/>";

$girlobj = new Girlclass();
$girlname = $girlobj->getname();
$girlage = $girlobj->getage();
$girlpro = $girlobj->getprofessional('female');

echo "{$girlname} is {$girlage} years old & she is a {$girlpro} .<br/>"; // Hsu Hsu is 25 years old & she is a Doctor .

echo "<hr/>";


?>