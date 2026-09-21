<?php

class Constantvsproperties{

    const ARTICLE = "This is new article for SPORT.";
    const TOPIC = "This is new topic for SPORT.";

    public $post = "This is new post for SPORT.";

    public function contentone(){
        echo self::ARTICLE . "<br/>";
        echo static::TOPIC . "<br/>";

        echo $this->post . "<br/>";

    }

}

class Baby1 extends Constantvsproperties{

    const ARTICLE = "This is new article for ART.";
    const TOPIC = "This is new topic for ART.";

    public $post = "This is new post for ART.";

    public function contenttwo(){
        echo self::ARTICLE . "<br/>";
        echo static::TOPIC . "<br/>";

        echo $this->post . "<br/>";

    }
}


echo "This is Constant vs Properties. <br/>";

$obj = new Constantvsproperties();
$obj->contentone();
// This is Constant vs Properties.
// This is new article for SPORT.
// This is new topic for SPORT.
// This is new post for SPORT.
echo "<hr/>";

$obj1 = new Baby1();
$obj1->contentone();
// This is new article for SPORT.
// This is new topic for ART.
// This is new post for ART.
echo "<hr/>";
$obj1->contenttwo();
// This is new article for ART.
// This is new topic for ART.
// This is new post for ART.
echo "<hr/>";


?>