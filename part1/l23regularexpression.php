<?php


$string = "We are family";

    // preg_match(pattern,string);

// $result = preg_match("We are family",$string); // error
$result = preg_match("/We are family/",$string); // true
$result = preg_match("/family/",$string); // true
$result = preg_match("/mily/",$string); // true
$result = preg_match("/Family/",$string); // false

$result = preg_match("/mily$/",$string); // true
$result = preg_match("/family$/",$string); // true
$result = preg_match("/Family$/",$string); // false
$result = preg_match("/are$/",$string); // false
$result = preg_match("/we$/",$string); // false

$result = preg_match("/^mily/",$string); // false
$result = preg_match("%^are%",$string); // false
$result = preg_match("#^we#",$string); // false
$result = preg_match("!^We!",$string); // true

$result = preg_match("/^family$/",$string); // Note :: string must be exact "family"
$result = preg_match("/^$/",$string); // Note :: string must be empty

$result = preg_match("/^we/",$string); // false
$result = preg_match("/^we/i",$string); // true
$result = preg_match("/^We/i",$string); // true

$result = preg_match("/[b-d]/",$string); // false
$result = preg_match("/[a-f]/",$string); // true
$result = preg_match("/[a-z]/",$string); // true
$result = preg_match("/[A-Z]/",$string); // true
$result = preg_match("/[0-4]/",$string); // false


$string = "my lucky number is 567";

$result = preg_match("/[0-4]/",$string); // false
$result = preg_match("/[5-9]/",$string); // true
$result = preg_match("/[a-z]/",$string); // true
$result = preg_match("/[A-Z]/",$string); // false
$result = preg_match("/[A-Z]|[a-z]/",$string); // true
$result = preg_match("/[A-Z,a-z]/",$string); // true
$result = preg_match("/^[a-z]/",$string); // true
$result = preg_match("/[a-z]$/",$string); // false
$result = preg_match("/^[5-9]/",$string); // false
$result = preg_match("/[5-9]$/",$string); // true

$result = preg_match("/[^a-z]/",$string); // true Note :: it's mean that not include a to z !, result is true cuz $string include space and digit
$result = preg_match("/[^5-9]/",$string); // true Note :: it's mean that not include 5 to 9 !, result is true cuz $string include space and string
$result = preg_match("/[^0-4]/",$string); // true Note :: it's mean that not include 0 to 4 !, result is true cuz $string include space and string

$result = preg_match("/@/",$string); // false

$string = "admin@gmail.com";
$result = preg_match("/@/",$string); // true
$result = preg_match("/m/",$string); // true
$result = preg_match("/m+/",$string); // true
$result = preg_match("/b+/",$string); // false
$result = preg_match("/b/",$string); // false
$result = preg_match("/b*/",$string); // true
$result = preg_match("/b?/",$string); // true

$result = preg_match("/m{1}/",$string); // true
$result = preg_match("/m{2}/",$string); // false


$string = "adminn@gmail.com";
$result = preg_match("/n{1}/",$string); // true
$result = preg_match("/n{2}/",$string); // true
$result = preg_match("/n{3}/",$string); // false
$result = preg_match("/n{2,3}/",$string); // true
$result = preg_match("/n{2,}/",$string); // true
$result = preg_match("/\s/",$string); // false


$string = "V8 Engine";
$result = preg_match("/\s/",$string); // true
$result = preg_match("/\d/",$string); // true
$result = preg_match("/\D/",$string); // true
$result = preg_match("/\w/",$string); // true
$result = preg_match("/\W/",$string); // true


$string = "528";
$result = preg_match("/\d/",$string); // true
$result = preg_match("/\D/",$string); // false
$result = preg_match("/\w/",$string); // true
$result = preg_match("/\W/",$string); // false


$string = "adminn@gmail.com";
$result = preg_match("/a\wm/",$string); // true
$result = preg_match("/a\w{1}m/",$string); // true
$result = preg_match("/a\w{2}m/",$string); // false     cuz any exact 2 words          // "adbmin@gmail.com"
$result = preg_match("/a\w{2,4}m/",$string); // false   cuz any exact 2 or 4 words       // "adbcdmin@gmail.com"
$result = preg_match("/a\w{2,}m/",$string); // false    cuz any exact 2 or more words         // "adbcedfdmin@gmail.com"


$result = preg_match("/a.m/",$string); // true
$result = preg_match("/a..m/",$string); // false        // "adbmin@gmail.com"
$result = preg_match("/a.{1}m/",$string); // true
$result = preg_match("/a.{2}m/",$string); // false      cuz any exact 2 words       // "adbmin@gmail.com"
$result = preg_match("/a.{2,4}m/",$string); // false    cuz any exact 2 or 4 words      // "adbcmin@gmail.com"
$result = preg_match("/a.{2,}m/",$string); // false     cuz any exact 2 or more words      // "adbdafacmin@gmail.com"


$string = "PHP";
$result = preg_match("/.{2}/",$string); // true


$string = "php";
$result = preg_match("/hp/",$string); // true
$result = preg_match("/p(hp)*/",$string); // true
$result = preg_match("/p(hp)+/",$string); // true


$string = "Vv";
$result = preg_match("/.{2}/",$string); // true
$result = preg_match("/^.{2}$/",$string); // true


$string = "Welcome to our <i>programming class</i>";
$result = preg_match("/<i><\/i>/",$string); // false
$result = preg_match("/<i>w<\/i>/",$string); // false , contained space
$result = preg_match("/<i>w*<\/i>/",$string); // false , contained space
$result = preg_match("/<i>.<\/i>/",$string); // false , contained space
$result = preg_match("/<i>.*<\/i>/",$string); // true
$result = preg_match("/<i>(.*)<\/i>/",$string); // true


$string = "admin@gmail.net";
$result = preg_match("/^[a-z,A-Z]+@[a-z]+\.\w{3}/",$string); // true



    // preg_replace(pattern,replacement,string)

$string = "Are you ready to learn PHP framework";
$result = preg_replace('/php/','javascript',$string); // Are you ready to learn PHP framework
$result = preg_replace('/php/i','javascript',$string); //Are you ready to javascript framework
$result = preg_replace('/\s/','javascript',$string); //AreyoureadytoPHPframework



    // Bracket Expressions

$string = "admin123@gmail .com";

$result = preg_replace("/[[:space:]]/","",$string); // admin123@gmail.com
$result = preg_replace("/[[:space:]]/","x",$string); // admin123@gmailx.com
$result = preg_replace("/[[:alpha:]]/","x",$string); // xxxxx123@xxxx.xxx
$result = preg_replace("/[[:digit:]]/","x",$string); // adminxxx@gmail .com
$result = preg_replace("/[[:alnum:]]/","x",$string); // xxxxxxxx@xxxx .xxx
$result = preg_replace("/[[:punct:]]/","x",$string); // admin123xgmail xcom

$string = "Admin123@gmail .Com";
$result = preg_replace("/[[:lower:]]/","x",$string); // Axxxx123@gxxxxx.Cxx
$result = preg_replace("/[[:upper:]]/","x",$string); // xdmin123@gmail.xom


$string = "Are you ready to learn PHP Framework";
$result = preg_replace(["/PHP/","/framework/"],["javascript","libraries"],$string); // Are you ready to learn javascript Framework
$result = preg_replace(["/PHP/","/framework/i"],["javascript","libraries"],$string); // Are you ready to learn javascript libraries


$string = "My lucky number is 007 but i got ticket number 5700";
$result = preg_replace("/[0-9]/","x",$string); // My lucky number is xxx but i got ticket number xxxx
$result = preg_replace("/[0-9]+/","x",$string); // My lucky number is x but i got ticket number x

echo $result;

                                // no limit = 0 (or) Null
    // preg_split(pattern,string,limit,flags)

$string = "My lucky number is 007";
$result = preg_split("/\s/",$string);
// echo $result; // error
echo "<pre>".print_r($result,true)."</pre>";
echo $result[0]; // My
echo $result[4]; // 007

$result = preg_split("/\s/",$string,2);
echo "<pre>".print_r($result,true)."</pre>";
echo $result[0]; // My
echo $result[1]; // lucky number is 007


$string = "My lucky number is 007 but i got ticket number 5700";
$result = preg_split("/\s/",$string);
$result = preg_split("/[\s]/",$string);
$result = preg_split("/\s,/",$string); // [0] My lucky number is 007 but i got ticket number 5700
$result = preg_split("/[\s,]/",$string);

$result = preg_split("/[\s,]/",$string,0,PREG_SPLIT_NO_EMPTY);
// $result = preg_split("/[\s,]/",$string,NULL,PREG_SPLIT_NO_EMPTY);
$result = preg_split("//",$string);
$result = preg_split("//",$string,0,PREG_SPLIT_NO_EMPTY);

echo "<pre>".print_r($result,true)."</pre>";



    // preg_quote(string,delimiter)

$string = "He\'s my father,do you know him ?";
$result = preg_quote($string); // He\\'s my father,do you know him \?

$result = preg_quote($string,"o"); // He\\'s my father,d\o y\ou kn\ow him \?

echo $result;



    // preg_match_all(pattern,string,match/return,flags);
$string = "Winning numbers are 227-000 & 002-777 , but my ticket number are 007-222 & 112233";

preg_match_all("/\d+-\d+/",$string,$result,PREG_SET_ORDER);
preg_match_all("/\d+-\d+/",$string,$result,PREG_PATTERN_ORDER);
// echo $result; // error
echo "<pre>".print_r($result,true)."</pre>";


    // Lookahead & Lookbehind
    // (?=) Positive Lookahead or regex Lookahead = right hand side
    // (?<=) Positive Lookbehind or regex Lookbehind = left hand side

    // (?!) Negative Lookahead or regex Lookahead = right hand side
    // (?<!) Negative Lookbehind or regex Lookbehind = left hand side


$string = "aungkyaw@cisco.com";
$result = preg_match('/@(?=cisco)/',$string); // true (Positive Lookahead)
$result = preg_match('/(?<=@)cisco/',$string); // true (Positive Lookahead)

$result = preg_match('/@(?!cisco)/',$string); // false (Negative Lookahead)
$result = preg_match('/(?<!@)cisco/',$string); // false (Negative Lookahead)





























?>





<!--
    $ must be in end (case sensitive)
    ^ must be in start (case sensitive) caret or circumflex , shift + 6
    i no case sensitive
    [] range a-z A-Z 0-9
    m+ must contain at least one m and more
    m* can contain b or not and more
    m? can contain b or not and more
    m{nth} contain (same place or couple place) m as per nth and more
    m{nth,nth} contain (same place or couple place) m as per nth and more
    m{nth,} contain (same place or couple place) m as per nth and more

    \s space
    \d digit
    \D no digit
    \w any word [a-z][A-Z][0-9]
    \W any word @#$*
    .  any character
    () this
    +  must
    *  can

    p(hp)* can be contain hp
    p(hp)+ must be contain hp

    [[:space]] space character
    [[:alpha]] alphabetic character
    [[:digit]] digit character
    [[:alnum]] alphanumeric character
    [[:punct]] punctration character
    [[:lower]] lower-case character
    [[:upper]] upper-case character

-->



















Local Computer

apache install
php install
mysql install

web server

OS
1 widows
    xampp       apache/php/mysql/filezila/mail server
    wamp        apache/php/mysql/filezila/mail server

        windows system 32x86/64
        windows version 7 10 11
        application

2 Linux
    lamp        apache/php/mysql/filezila/mail server

    apache
    php
    mysql

    cpanel
    wordpress
    wix