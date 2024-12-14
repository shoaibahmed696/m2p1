<?php

//loops (For, while, Do-while, Foreach)

//For

for($Batch=1; $Batch<5; $Batch++){
    echo $Batch . "\n";
}



//while

$batch=10;
while($batch>5){
    echo $batch . "\n";
    $batch--;
}

// Do-While 

$batch = 20;
Do{
    echo $batch++ . "\n";
}
while($batch<30);

// Foreach

$friends = ["Ibrahim", "shobuj", "polash", "Monir", "Razib"];

foreach ($friends as $friend){
    echo $friend."\n";
}

// Continue 

$students = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

for($r= 0; $r < count($students); $r++) {

if($students[$r] % 2 != 0){ 
continue;


}
echo $students[$r] . "\n";
}

//break 

for($n=0; $n < count($students);){
    if($n == 5){
        break;
    }
    echo $n++. "\n";
}

//function 

function name($fname, $lname){
    $name = 'Hello'."  ". $fname."  " . $lname;
    return $name;
}

echo name("Shoaib", "Ahmed");