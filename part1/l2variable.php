<?php

$fullname = "U Kyaw Kyaw";
$job = "Developer";

echo $fullname;
print $job;

echo "$fullname"; // U Kyaw Kyaw
print '$job'; // $job



echo "My name is $fullname"; // My name is U Kyaw Kyaw
echo 'My name is $fullname'; // My name is $fullname
echo "My name is ${fullname}"; // My name is U Kyaw Kyaw


echo `My name is {$fullname}`; // error     My name is $fullname
echo `My name is ${fullname}`; // error     My name is $fullname

echo "He\'s my father, he is a $job"; // He's my father, he is a Developer
echo "He's my father, he is a \$job"; // He's my father, he is a $job
echo 'He\'s my father, he is a $job'; // He's my father, he is a $job
echo "He's my father, he is a \${job}"; // He's my father, he is a ${job}
echo "He's my father, he is a \{$job}"; // He's my father, he is a \{Developer}
echo "He's my father, he is a {\$job}"; // He's my father, he is a {$job}




$gender = echo "female"; //error
$nation = print "burma"; // burma



// Concat(.)

$firstname = "Aung";
$lastname = "Kyaw Kyaw";

echo $firstname;
echo $lastname;

echo $firstname.$lastname;
echo $firstname.' '.$lastname;



// Comments
# Single line comment

/* Multi Line Comment
comment 1
comment 2
comment 3 */















?>