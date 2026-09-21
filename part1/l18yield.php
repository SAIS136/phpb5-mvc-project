<?php

// yield Keyword

function funone(){
    yield "1";
    yield "2";
    yield "3";
    yield '4';
    yield 5;
}

$vals = funone();

foreach($vals as $val){
    echo $val; // 1 to 5
}


function funtwo(){
    $index = 0;

    while($index < 10){
        yield $index;
        $index++;
    }
}

$vals = funtwo();

foreach($vals as $val){
    echo $val; // 0 to 9
}



// yield ith from

function funthree(){
    // yield from [1,2,3,4,5];

    // yield from [1,2,3,4,5];
    //  yield 6;

    yield from [1,2,3,4,5];
    yield from [6,7,8];
    yield from [10];

}

$vals = funthree();

foreach($vals as $val){
    echo $val; // 1 to 10
}


?>