<?php

ini_set('display_errors',1);

require_once ("./Customload.php");

use gallery\slideshow\Image;
use gallery\slideshow as viewer;


Customload::loader('Music');
$musicobj = new Music();
$musicobj->play();

Customload::loader('Video');
$videoobj = new Video();
$videoobj->play();

Customload::loader('gallery\Photo');
$photoobj = new gallery\Photo();
$photoobj->play();

Customload::loader('gallery\animateshow\Portrait');
$portrait = new gallery\animateshow\Portrait();
$portrait->play();

Customload::loader('gallery\slideshow\Image');
$portrait = new Image();
$portrait->play();

Customload::loader('gallery\slideshow\Picture');
$portrait = new viewer\Picture();
$portrait->play();

?>