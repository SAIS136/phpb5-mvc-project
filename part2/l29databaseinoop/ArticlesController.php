<?php

require_once('Article.php');

$articleobj = new Article();

// => Read
// echo "<pre>".print_r($article->getarticles(),true)."</pre>";
// var_dump($article->getarticles());
// var_dump($article->getarticles());
// var_dump($article->getarticlebyid(1));
// var_dump($article->getarticlebyid(15));

// => Insert

    // $data = ["title"=>"this is new article 13","content"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","user_id"=>4];
    // $articleobj->insertarticle($data);
    // var_dump($articleobj->getarticles());


// => Update

    // $data = ["id"=>11,"title"=>"this is new article 110","content"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","user_id"=>1];
    // $articleobj->updatearticle($data);
    // var_dump($articleobj->getarticles());


// => Delete

    $articleobj->deletearticle(10);
    var_dump($articleobj->getarticles());



?>