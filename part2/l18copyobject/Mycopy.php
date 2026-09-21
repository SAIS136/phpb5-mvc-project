<?php

ini_set('display_errors',1);

class Mycopy{

    public $article;

    public function __construct($val){
        $this->article = $val;
    }

}

function copyobject(Mycopy $obj1,Mycopy $obj2){

    $obj2->article = $obj1->article;

}

echo "This is Copy Objects. <br/>";

$newsobj1 = new Mycopy("This is the first article 1");
$newsobj2 = new Mycopy("This is the second article 2");

echo $newsobj1->article; // This is the first article 1
echo "<br/>";
echo $newsobj2->article; // This is the second article 2


echo "<br/>";

copyobject($newsobj1,$newsobj2);

echo $newsobj2->article; // This is the first article 1


echo "<hr/>";

?>