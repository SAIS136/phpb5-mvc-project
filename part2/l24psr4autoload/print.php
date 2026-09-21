<?php

require_once("vendor/autoload.php");

use app\Music;
use app\Video;
use app\gallery\Photo;
use app\gallery\animateshow\Portrait;
use app\gallery\slideshow as slider;
use app\Models\Article;
use config\Auth;

$music = new Music();
$music->play();

$video = new Video();
$video->play();

$photo = new Photo();
$photo->play();

$portrait = new Portrait();
$portrait->play();

$image = new slider\Image();
$image->play();

$article = new Article();
$article->index();

$auth = new Auth();
$auth->login();





?>

<!-- PSR 4 (  PHP Standard Recommendation Version4) -->
<!-- composer dump-autoload -->
<!-- composer dump-autoload -o -->