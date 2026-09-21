<?php

ini_set('display_errors',1);

class Myiterate{

    public $article;
    public $comment = true;

    public function __construct($val){
        $this->article = $val;
    }

    function greeting(){
        echo "Hello World";
    }

}

echo "This is Iterate Objects. <br/>";

$objs = new Myiterate("This is new articles");
echo $objs->article; // This is new articles
echo "<br/>";
echo $objs->comment; // 1
echo "<br/>";
echo $objs->greeting(); // Hello World
echo "<br/>";

foreach($objs as $key=>$obj){
    echo $key. " = " . $obj . "<br/>";
}


var_dump($objs);


echo "<hr/>";

?>