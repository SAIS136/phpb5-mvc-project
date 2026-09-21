<?php

// Parent Class / Main Class / Super Class

// Note :: define() not working in class method

class Myinheritance{

    // Properties / Member properties

    public $fullname = "Hsu Hsu";
    public $city = "Yangon";
    public $email = "hsuhsu@gmail.com";
    public $password = "123456";

    // Methods / Member Method
    public function getaccess(){
        echo "This is site login : email is $this->email & password is $this->password . <br/>";
    }

    public function getinfo(){
        echo "Name is $this->fullname & City is $this->city . <br/>";
    }

}

// Child Class
class Devlogin extends Myinheritance{
    // Methods / Member Method
    public function githublogin(){
        echo "This is github login email is : $this->email & profile name is $this->fullname . <br/>";

    }
}

class Sociallogin extends Myinheritance{

    public function gmaillogin(){
        echo "This is gmail login email is : $this->email & profile name is $this->fullname . <br/>";
    }

    public function facebooklogin(){
        echo "This is facebook login email is : $this->email & profile name is $this->fullname . <br/>";
    }

    public function getinfo(){

        $this->fullname = "Hsu Myat";
        $this->city = "Bago";

        echo "Name is $this->fullname & City is $this->city . <br/>";
    }
}

class Locallogin extends Sociallogin{

    public function sitelogin(){
        echo "This is site login email is : $this->email & profile name is $this->fullname . <br/>";
    }
}


echo "This is Inheritance <br/>";


$obj = new Myinheritance();
echo $obj->fullname . "<br/>";
$obj->getaccess();
$obj->getinfo();


echo "<hr/>";

$devobj = new Devlogin();
echo $devobj->fullname . "<br/>";
$devobj->getaccess();
$devobj->getinfo();
$devobj->githublogin();

echo "<hr/>";

$solobj = new Sociallogin();
echo $solobj->fullname . "<br/>";
$solobj->getaccess();
$solobj->getinfo();
// $solobj->githublogin();

$solobj->gmaillogin();
$solobj->facebooklogin();

$solobj->getinfo();

echo "<hr/>";

$lcobj = new Locallogin();
echo $lcobj->fullname . "<br/>";
$lcobj->getaccess();
$lcobj->getinfo();

echo "<hr/>";

?>