<?php

trait Sitelogin{
    public $fullname = "yu yu";
    public $email = "yuyu@gmail.com";
    public $password = "123456";

    public function useraccess(){
        echo "This is site login , Email is $this->email & Password is $this->password. <br/>";
    }

    public function userinfo(){
        echo "Profile is $this->fullname . <br/>";
    }
}

trait Devlogin{

    public function githublogin(){
        echo "This is github login , Email is $this->email & Password is $this->password. <br/>";
    }

}

class Googleauth{

    // Method 3
    use Sitelogin,Devlogin;

    public function gmaillogin(){
        // echo "This is Gmail login . Email is $this->email & Password is $this->password. <br/>";
    }
}

trait Mastertrait{
    use Sitelogin,Devlogin;
}

// Class Object
class Mytrait extends Googleauth{

    // Method 1
    // use Sitelogin;
    // use Devlogin;

    // Method 2
    // use Sitelogin,Devlogin;

    // Method 4
    // use Mastertrait;

}


echo "This is Trait <br/>";


$obj = new Mytrait();
$obj->gmaillogin(); // This is Gmail login . Email is hsuhsu@gmail.com & Profile name is hsu hsu
echo $obj->fullname; // yu yu
echo $obj->email; // yuyu@gmial.com
echo $obj->password; // 123456
echo "<br/>";
$obj->useraccess();
$obj->userinfo();

$obj->githublogin();




$ggo = new Googleauth();
$ggo->gmaillogin();

echo "<hr/>";


?>