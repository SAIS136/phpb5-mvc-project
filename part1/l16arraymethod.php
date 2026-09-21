<?php

// => array_combine(key,value) Function

$name = array("aung aung","hsu hsu","kyaw kyaw","hla hla");
$age = [30,25,35,40];

$result = array_combine($name,$age);
echo "<pre>".print_r(($result),true)."</pre>"; // ( [aung aung] => 30 [hsu hsu] => 25 [kyaw kyaw] => 35 [hla hla] => 40 )
echo $result["kyaw kyaw"]; // 35


// => count(array) Function
$vehicles = ["toyota","ford","audi","mazda","suzuki","ford","mazda","bmw"];
echo count($vehicles); // 8



// => sizeof(array) Function
$colors = ["red","green","blue","yellow","pink"];
echo sizeof($colors); // 5




// => array_count_values(array) Function
$cars = ["toyota","ford","audi","mazda"];
echo "<pre>".print_r((array_count_values($cars)),true)."</pre>"; // ( [toyota] => 1 [ford] => 1 [audi] => 1 [mazda] => 1 )
$brands = ["toyota","ford","audi","mazda","suzuki","ford","mazda","bmw","Toyota"];
echo "<pre>".print_r((array_count_values($brands)),true)."</pre>"; // ( [toyota] => 1 [ford] => 2 [audi] => 1 [mazda] => 2 [suzuki] => 1 [bmw] => 1 [Toyota] => 1 )


// => array_chunk(array,length) Function
// => array_chunk(array,length,preserveKey) Function
// preservekey = true/false(default)

$couples = ["aung aung","hsu hsu","kyaw kyaw","nu nu","tun tun","yin yin","zaw zaw","aye aye"];
$result1 = array_chunk($couples,4);
echo "<pre>".print_r($result1,true)."</pre>"; // ( [0] => Array ( [0] => aung aung [1] => hsu hsu [2] => kyaw kyaw [3] => nu nu ) [1] => Array ( [0] => tun tun [1] => yin yin [2] => zaw zaw [3] => aye aye))
echo $result1[0][1]; // hsu hsu

$result2 = array_chunk($couples,2,true);
echo "<pre>".print_r($result2,true)."</pre>"; // 012345

$result3 = array_chunk($couples,2,false);
echo "<pre>".print_r($result3,true)."</pre>"; // 01 01 01 01



// => array_diff(array1,array2,... ) Function
// Note :: we don't need to consider any index or keyname

$colors1 = ["red","green","blue","pink"];
$colors2 = ["red","blue","pink","silver"];
$colors3 = ["green","blue","orange","violet"];

echo "<pre>".print_r(array_diff($colors1,$colors2),true)."</pre>"; // [1] => green
echo "<pre>".print_r(array_diff($colors2,$colors1),true)."</pre>"; //  [3] => silver
echo "<pre>".print_r(array_diff($colors1,$colors2,$colors3),true)."</pre>"; // ()

$col1 = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
$col2 = ["e"=>"red","f"=>"green","g"=>"black"];
echo "<pre>".print_r(array_diff($col1,$col2),true)."</pre>"; // ( [c] => blue [d] => yellow )
echo "<pre>".print_r(array_diff($col2,$col1),true)."</pre>"; // ( [g] => black )



// => array_diff_assoc(array1,array2,... ) Function
// Note :: we need to consider any keyname and value (just for assoc array)

$col1 = ["a"=>"red","b"=>"yellow","c"=>"blue","d"=>"green"];
$col2 = ["a"=>"red","b"=>"green","c"=>"blue"];
echo "<pre>".print_r(array_diff_assoc($col1,$col2),true)."</pre>"; // ( [b] => yellow [d] => green )
echo "<pre>".print_r(array_diff_assoc($col2,$col1),true)."</pre>"; // ( [b] => green )




// => array_diff_key(array1,array2,... ) Function
// Note :: we need to consider any keyname

$col1 = ["a"=>"red","b"=>"yellow","c"=>"blues","d"=>"green","f"=>"pink"];
$col2 = ["a"=>"red","b"=>"green","c"=>"blue","e"=>"orange"];
echo "<pre>".print_r(array_diff_key($col1,$col2),true)."</pre>"; // ( [d] => green [f] => pink )
echo "<pre>".print_r(array_diff_key($col2,$col1),true)."</pre>"; // ( [e] => orange )



// => array_intersect(array1,array2,... ) Function
// Note :: we don't need to consider any keyname

$num1 = [10,20,30,60,70,80];
$num2 = [10,20,30,40,50,90,80];
echo "<pre>".print_r(array_intersect($num1,$num2),true)."</pre>"; // ( [0] => 10 [1] => 20 [2] => 30 [5] => 80 )
echo "<pre>".print_r(array_intersect($num2,$num1),true)."</pre>"; // ( [0] => 10 [1] => 20 [2] => 30 [5] => 80 )


$col1 = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
$col2 = ["a"=>"red","f"=>"green","d"=>"orange"];
echo "<pre>".print_r(array_intersect($col1,$col2),true)."</pre>"; // ( [a] => red [b] => green )
echo "<pre>".print_r(array_intersect($col2,$col1),true)."</pre>"; // ( [a] => red [f] => green )



// => array_fill(startindex,count,value) Function

echo "<pre>".print_r(array_fill(0,5,"green"),true)."</pre>"; // ( [0] => green [1] => green [2] => green [3] => green [4] => green )
echo "<pre>".print_r(array_fill(2,5,"blue"),true)."</pre>"; // ( [2] => blue [3] => blue [4] => blue [5] => blue [6] => blue )


// => array_fill_keys(keys,value) Function

$keys = ["a","b","c","d"];
$values = ["red","green","blue","pink"];
echo "<pre>".print_r(array_fill_keys($keys,"pink"),true)."</pre>"; // ( [a] => pink [b] => pink [c] => pink [d] => pink )
echo "<pre>".print_r(array_fill_keys($keys,$values),true)."</pre>"; // ( [a] => Array ( [0] => red [1] => green [2] => blue [3] => pink ) [b] => Array ( [0] => red [1] => green [2] => blue [3] => pink ) .........


// => array_key_exists(keys,array) Function

$operators = ["mpt"=>"ftth","ooredoo"=>"broadband"];

if(array_key_exists("mpt",$operators)){
    echo "Key exists";
}else{
    echo "Key does not exists";
}


// => array_merge(array1,array2,...) Function

$arr1 = ["red","green"];
$arr2 = array("blue","yellow");
$arr3 = ["orange","violet"];

echo "<pre>".print_r(array_merge($arr1,$arr2),true)."</pre>"; // ( [0] => red [1] => green [2] => blue [3] => yellow )
echo "<pre>".print_r(array_merge($arr1,$arr2,$arr3),true)."</pre>"; // ( [0] => red [1] => green [2] => blue [3] => yellow [4] => orange [5] => violet )



// => array_keys(array,value) Function
// => array_keys(array,value,strict) Function

$phones = ["mpt"=>"ftth","ooredoo"=>"broadband","atom"=>"wifi"];

echo "<pre>".print_r(array_keys($phones),true)."</pre>"; // ( [0] => mpt [1] => ooredoo [2] => atom )
echo array_keys($phones)[1]; // ooredoo


echo "<pre>".print_r(array_keys($phones,"broadband"),true)."</pre>"; // ( [0] => ooredoo )
echo array_keys($phones,"broadband")[0]; // ooredoo


$numbers = [10,20,30,"10"];

echo "<pre>".print_r(array_keys($numbers,"10"),true)."</pre>"; // ( [0] => 0  [0] => 3)
echo "<pre>".print_r(array_keys($numbers,10),true)."</pre>"; // ( [0] => 0  [0] => 3)

echo "<pre>".print_r(array_keys($numbers,10,false),true)."</pre>"; // ( [0] => 0  [0] => 3)
echo "<pre>".print_r(array_keys($numbers,"10",false),true)."</pre>"; // ( [0] => 0  [0] => 3)

echo "<pre>".print_r(array_keys($numbers,10,true),true)."</pre>"; // ( [0] => 0 )
echo "<pre>".print_r(array_keys($numbers,"10",true),true)."</pre>"; // ( [0] => 3)



// => array_map(callback,array1,array2,...) Function

$males = ["tun tun","aung aung","kyaw kyaw","thura","zaw zaw"];
$females = array("hla hla","hsu hsu","nu nu","yu yu","thida");

function genderone($male){
    return ("Mr.".$male);
}

function gendertwo($male,$female){
    return ($male." & ".$female);
}


echo "<pre>".print_r(array_map("genderone",$males),true)."</pre>"; // ( [0] => Mr.tun tun [1] => Mr.aung aung [2] => Mr.kyaw kyaw [3] => Mr.thura [4] => Mr.zaw zaw )
echo "<pre>".print_r(array_map("gendertwo",$males,$females),true)."</pre>"; // ( [0] => tun tun & hla hla [1] => aung aung & hsu hsu [2] => kyaw kyaw & nu nu [3] => thura & yu yu [4] => zaw zaw & thida )



// => sort(array) Function

$cars = ["volvo","bmw","toyota","mazda","suzuki"];
sort($cars);
echo "<pre>".print_r($cars,true)."</pre>"; // ( [0] => bmw [1] => mazda [2] => suzuki [3] => toyota [4] => volvo )

$numbers = [10,50,"80",90,35,"100",130,"250",70];
sort($numbers);
echo "<pre>".print_r($numbers,true)."</pre>"; // ( [0] => 10  [1] => 35 [2] => 50 [3] => 70 [4] => 80 [5] => 90 [6] => 100 [7] => 130 [8] => 250 )



// => array_multisort(array) Function

$carbrands = ["volvo","bmw","toyota","mazda","suzuki"];
array_multisort($carbrands);
echo "<pre>".print_r($carbrands,true)."</pre>"; // ( [0] => bmw [1] => mazda [2] => suzuki [3] => toyota [4] => volvo )

$luckynumbers = [10,50,"80",90,35,"100",130,"250",70];
array_multisort($luckynumbers);
echo "<pre>".print_r($luckynumbers,true)."</pre>"; // ( [0] => 10  [1] => 35 [2] => 50 [3] => 70 [4] => 80 [5] => 90 [6] => 100 [7] => 130 [8] => 250 )


// => array_reverse(array) Function

$vehicles = ["volvo","bmw","toyota","mazda","suzuki"];
sort($vehicles);
echo "<pre>".print_r(array_reverse($vehicles),true)."</pre>"; // ( [0] => volvo [1] => toyota [2] => suzuki [3] => mazda [4] => bmw )

$winnumbers = [10,50,"80",90,35,"100",130,"250",70];
sort($winnumbers);
echo "<pre>".print_r(array_reverse($winnumbers),true)."</pre>"; // ( [0] => 250 [1] => 130 [2] => 100 [3] => 90 [4] => 80 [5] => 70 [6] => 50 [7] => 35 [8] => 10 )




// => array_pad(array,length,value) Function

$colors = ["red","green"];
echo "<pre>".print_r(array_pad($colors,5,"blue"),true)."</pre>"; // ( [0] => red [1] => green [2] => blue [3] => blue [4] => blue )



// => array_reduce(array,callback,initial) Function

$nums = [10,"20",30];

function calfun($total,$val){
    return $total += $val;
}

echo array_reduce($nums,"calfun",0) // 60



// => array_sum(array) Function

$arnum = [10,20,30,40,50];
echo array_sum($arnum); // 150

$arnum1 = [10,20,30,"40",-50];
echo array_sum($arnum1); // 50

$arnum2 = ["a"=>10.2,"b"=>20.3,"c"=>30.3];
echo array_sum($arnum2); // 60.8





// => array_pop(array) Function

$myarrs = ["a","b","c","d","e"];
echo array_search("d",$myarrs) // 3

$myarrs = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"black","e"=>"violet"];
echo array_search("green",$myarrs) // b




// => array_pop(array) Function

$colours = ["red","green","blue"];
array_pop($colours);
echo "<pre>".print_r($colours,true)."</pre>"; // ( [0] => red [1] => green )




// => array_shift() Function

$color1 = ["red","green","blue"];
array_shift($color1);
echo "<pre>".print_r($color1,true)."</pre>"; // ( [0] => green [1] => blue )


$color2 = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"violet"];
array_shift($color2);
echo "<pre>".print_r($color2,true)."</pre>"; // ( [b] => green [c] => blue [d] => violet )


// => unset(array index) Function and array_values(array)

$color1 = ["red","green","blue"];
// unset($color1[1]);
// echo "<pre>".print_r($color1,true)."</pre>"; // ( [0] => red [2] => blue )

unset($color1[1]);
echo "<pre>".print_r(array_values($color1),true)."</pre>"; // ( [0] => red [1] => blue )

$color2 = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"violet","e"=>"pink"];
echo "<pre>".print_r(array_values($color2),true)."</pre>"; //( [0] => red [1] => green [2] => blue [3] => violet [4] => pink )

$infos = ["name"=>"aung aung","age"=>20,"city"=>"yangon"];
unset($infos["age"]);
echo "<pre>".print_r(array_values($infos),true)."</pre>"; //( [0] => aung aung [1] => yangon )





// => array_unshift(array,value1,value2,...) Function

$color1 = ["red","green","blue"];
array_unshift($color1,"silver","violet");
echo "<pre>".print_r($color1,true)."</pre>"; // ( [0] => silver [1] => violet [2] => red [3] => green [4] => blue )


$color2 = ["0"=>"red","1"=>"green","2"=>"blue"];
array_unshift($color2,"silver","violet");
echo "<pre>".print_r($color2,true)."</pre>"; // ( [0] => silver [1] => violet [2] => red [3] => green [4] => blue )


$color3 = ["a"=>"red","b"=>"green","c"=>"blue"];
array_unshift($color2,"silver","violet");
echo "<pre>".print_r($color2,true)."</pre>"; // ( [0] => silver [1] => violet [a] => red [b] => green [c] => blue )



// => array_push(array,value1,value2,...) Function

$color1 = ["red","green","blue"];
array_push($color1,"silver","violet");
echo "<pre>".print_r($color1,true)."</pre>"; // ( [0] => red  [1] => green [2] => blue [3] => silver [4] => violet )


$color2 = ["0"=>"red","1"=>"green","2"=>"blue"];
array_push($color2,"silver","violet");
echo "<pre>".print_r($color2,true)."</pre>"; // ( [0] => red  [1] => green [2] => blue [3] => silver [4] => violet )


$color3 = ["a"=>"red","b"=>"green","c"=>"blue"];
array_push($color2,"silver","violet");
echo "<pre>".print_r($color2,true)."</pre>"; // ( [a] => red  [b] => green [c] => blue [0] => silver [1] => violet )



// => array_slice(array,offset/index) Function
// => array_slice(array,offset/index,length) Function
// => array_slice(array,offset/index,length,preserve) Function

$candycolors = ["red","green","blue","yellow","pink"];
echo "<pre>".print_r(array_slice($candycolors,0),true)."</pre>"; // [red to pink]
echo "<pre>".print_r(array_slice($candycolors,2),true)."</pre>"; // [blue to pink]

echo "<pre>".print_r(array_slice($candycolors,0,2),true)."</pre>"; // ( [0] => red [1] => green )
echo "<pre>".print_r(array_slice($candycolors,2,2),true)."</pre>"; // ( [0] => blue [1] => yellow )
echo "<pre>".print_r(array_slice($candycolors,2,5),true)."</pre>"; // ( [0] => blue [1] => yellow [2] => pink )

echo "<pre>".print_r(array_slice($candycolors,2,5,false),true)."</pre>"; // ( [0] => blue [1] => yellow [2] => pink )
echo "<pre>".print_r(array_slice($candycolors,2,5,true),true)."</pre>"; // ( [3] => blue [4] => yellow [5] => pink )


// => array_splice(array,offset/index) Function
// => array_splice(array,offset/index,length) Function
// => array_splice(array,offset/index,length,array) Function

$shirtcolors = ["red","green","blue","yellow","pink"];
echo "<pre>".print_r(array_splice($shirtcolors,0),true)."</pre>"; // [red to pink]
echo "<pre>".print_r(array_splice($shirtcolors,2),true)."</pre>"; // [blue to pink]

echo "<pre>".print_r(array_splice($shirtcolors,0,2),true)."</pre>"; // ( [0] => red [1] => green )
echo "<pre>".print_r(array_splice($shirtcolors,2,2),true)."</pre>"; // ( [0] => blue [1] => yellow )
echo "<pre>".print_r(array_splice($shirtcolors,2,5),true)."</pre>"; // ( [0] => blue [1] => yellow [2] => pink )


$males = ["aung aung","mg mg","kyaw kyaw","zaw zaw","naung naung"];
$females = ["hsu hsu","yu yu","nu nu"];
// array_splice($males,0,2,$females);
// echo "<pre>".print_r($males,true)."</pre>"; // ( [0] => hsu hsu [1] => yu yu [2] => nu nu [3] => kyaw kyaw [4] => zaw zaw [5] => naung naung )

// array_splice($males,0,3,$females);
// echo "<pre>".print_r($males,true)."</pre>"; // ( [0] => hsu hsu [1] => yu yu [2] => nu nu  [3] => zaw zaw [4] => naung naung )

array_splice($males,1,3,$females);
echo "<pre>".print_r($males,true)."</pre>"; // ( [0] => aung aung [1] => hsu hsu [2] => yu yu [3] => nu nu [4] => naung naung )



// array_unique() Function

$num = [10,20,30,50,10,30,60,70,80,10];
echo "<pre>".print_r(array_unique($num),true)."</pre>"; // ( [0] => 10 [1] => 20 [2] => 30 [3] => 50 [6] => 60 [7] => 70 [8] => 80 )

$colors = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"red","e"=>"blue"];
echo "<pre>".print_r(array_unique($colors),true)."</pre>"; // ( [a] => red [b] => green [c] => blue )


// => array_walk(array,callback function) Function
// => array_walk(array,callback function,parameter) Function

$colors = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"red","e"=>"blue"];

function myfunone($val,$key){
    echo "Key is = $key and value is $val. ";
}
array_walk($colors,"myfunone"); // Key is = a and value is red. Key is = b and value is green. Key is = c and value is blue. Key is = d and value is red. Key is = e and value is blue.

function myfuntwo($val,$key,$p){
    echo "Key is = $key and value is $val $p. ";
}
array_walk($colors,"myfuntwo","hi"); // Key is = a and value is red hi. Key is = b and value is green hi. Key is = c and value is blue hi. Key is = d and value is red hi. Key is = e and value is blue hi.

function myfunthree(&$val){
    $val = "orange";
    return $val;
}
array_walk($colors,"myfunthree");
echo "<pre>".print_r($colors,true)."</pre>"; // ( [a] => orange [b] => orange [c] => orange [d] => orange [e] => orange )



// => compact(var1,var2,va3,...) Function

$name = "Aung Aung";
$age = "25";
$city = "Yangon";

$result = compact("name","age","city");
echo "<pre>".print_r($result,true)."</pre>"; // ( [name] => Aung Aung [age] => 25 [city] => Yangon )


// => range(start,end) Function
// => range(start,end,step) Function

$num1 = range(0,5);
echo "<pre>".print_r($num1,true)."</pre>"; // ( [0] => 0 [1] => 1 [2] => 2 [3] => 3 [4] => 4 [5] => 5 )

$num2 = range(0,50,10);
echo "<pre>".print_r($num2,true)."</pre>"; // ( [0] => 0 [1] => 10 [2] => 20 [3] => 30 [4] => 40 [5] => 50 )

$char1 = range("a","h");
echo "<pre>".print_r($char1,true)."</pre>"; // ( [0] => a [1] => b ... [6] => g [7] => h )

$char2 = range("k","g");
echo "<pre>".print_r($char2,true)."</pre>"; // ( [0] => k [1] => j [2] => i [3] => h [4] => g )


// => current() , next() , prev() , pos() , reset() Function
$students = ["aung aung","mg mg","zaw zaw","tun tun","kyaw kyaw"];
echo current($students); // aung aung
echo pos($students); // aung aung

echo end($students); // kyaw kyaw
echo current($students); // kyaw kyaw

echo current($students); // aung aung
echo next($students); // mg mg
echo current($students); // mg mg
echo next($students); // zaw zaw
echo prev($students); // mg mg

echo end($students); // kyaw kyaw
echo current($students); // kyaw kyaw
echo prev($students); // tun tun

echo reset($students);
echo current($students); // aung aung


// => serialize() , unserialize() Function

$staffs = [
    ["aung aung","mg mg","zaw zaw","tun tun","kyaw kyaw"],
    ["hsu hsu","yu yu","nu nu","aye aye","hla hla"]
];

echo "<pre>".print_r($staffs,true)."</pre>"; //

$seridatas = serialize($staffs);
echo $seridatas; // a:2:{i:0;a:5:{i:0;s:9:"aung aung";i:1;s:5:"mg mg";i:2;s:7:"zaw zaw";i:3;s:7:"tun tun";i:4;s:9:"kyaw kyaw";}i:1;a:5:{i:0;s:7:"hsu hsu";i:1;s:5:"yu yu";i:2;s:5:"nu nu";i:3;s:7:"aye aye";i:4;s:7:"hla hla";}}
var_dump($seridatas); // string(204) "a:2:{i:0;a:5:{i:0;s:9:"aung aung";i:1;s:5:"mg mg";i:2;s:7:"zaw zaw";i:3;s:7:"tun tun";i:4;s:9:"kyaw kyaw";}i:1;a:5:{i:0;s:7:"hsu hsu";i:1;s:5:"yu yu";i:2;s:5:"nu nu";i:3;s:7:"aye aye";i:4;s:7:"hla hla";}}"

$unseriadatas = unserialize($seridatas);
echo "<pre>".print_r($unseriadatas,true)."</pre>"; // ( [0] => Array ( [0] => aung aung [1] => mg mg [2] => zaw zaw [3] => tun tun [4] => kyaw kyaw ) [1] => Array ( [0] => hsu hsu [1] => yu yu [2] => nu nu [3] => aye aye [4] => hla hla ))



?>