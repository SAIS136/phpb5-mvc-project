<?php

$getdatas = file_get_contents('l29studentdb.json');
// echo $getdatas;
$datasde = json_decode($getdatas,true); // array
// echo "<pre>".print_r($datasde,true)."</pre>";

// => Read

// foreach($datasde as $datas){
//     // echo "<pre>".print_r($datas,true)."</pre>";

//     foreach($datas as $key=>$data){
//         echo $key ." = ". $data . "<br/>";
//     }

//     echo "<hr/>";

// }


// => Create

// $newdatas = [
//     [
//         "id"=>8,
//         "name"=>"lin lin",
//         "city"=>"mandalay"
//     ],
//     [
//         "id"=>9,
//         "name"=>"chit thu wai",
//         "city"=>"mandalay"
//     ],
//     [
//         "id"=>10,
//         "name"=>"honey nway oo",
//         "city"=>"mandalay"
//     ]
// ];


// foreach($newdatas as $newdata){
//     array_push($datasde,$newdata);
//     file_put_contents('./l29studentdb.json',json_encode($datasde));
// }


// => Update

// foreach($datasde as $key=>$datas){
    // echo $datas;
    // echo "<pre>".print_r($datas,true)."</pre>";
    // echo $key; // 0 to 9

    // echo "<pre>".print_r($datasde[$key],true)."</pre>";
    // echo $datas['id']; // 1 to 10

    // if($datas['id'] === 9){
        // id number 9 = index number 8
        // $datasde[8]["name"] = "chit hsu wai";

        // $datasde[$key]["name"] = "chit hsu wai";
    // }

// }
// do save
// file_put_contents('./l29studentdb.json',json_encode($datasde));



// => Delete

$idxs = [];

// select index to delete
foreach($datasde as $key=>$datas){
    // echo "<pre>".print_r($datas,true)."</pre>";

    if($datas['id'] === 10){
        $idxs[] = $key; // index number 9
    }
}

// delete value from array
foreach($idxs as $idx){
    unset($datasde[$idx]);
}

// do save
file_put_contents('./l29studentdb.json',json_encode($datasde));


foreach($datasde as $datas){
    // echo "<pre>".print_r($datas,true)."</pre>";

    foreach($datas as $key=>$data){
        echo $key ." = ". $data . "<br/>";
    }

    echo "<hr/>";

}



?>

<!--
[
    {
        "id":1,
        "name":"hsu hsu",
        "city":"Mandalay"
    },
    {
        "id":2,
        "name":"nu nu",
        "city":"Mandalay"
    },
    {
        "id":3,
        "name":"yu yu",
        "city":"Mandalay"
    },
    {
        "id":4,
        "name":"aung aung",
        "city":"Mandalay"
    },
    {
        "id":5,
        "name":"kyaw kyaw",
        "city":"Mandalay"
    },
    {
        "id":6,
        "name":"Soe Thu",
        "city":"Mandalay"
    },
    {
        "id":7,
        "name":"aung kyaw",
        "city":"Mandalay"
    }
] -->