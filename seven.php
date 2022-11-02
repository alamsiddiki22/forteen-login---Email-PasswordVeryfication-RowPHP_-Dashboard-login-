<?php
$team_members = ["Rakib", "Sakib", "Habib", "Rokib", "Nojib",];
foreach($team_members as $index => $name){
    echo ($index+1).") ".$name."<br>";
}


$marks = [
    "math" => 50,
    "science" => 38,
    "english" => 30,
    "english_2" => -30,
    "bangla" => 60,
    "bangla_2" => 160,
    "religion" => 80,
    "Agricultural" => 75,

];

foreach ($marks as $subject => $mark) {
    echo $subject." = ".$mark;
    if($mark >= 80 && $mark <=100) {
        echo "(A+) <br>";
    }
    else if($mark >= 70 && $mark < 80) {
        echo "(A) <br>";
    }
    else if($mark >= 60 && $mark < 70) {
        echo "(A-) <br>";
    }
    else if($mark >= 50 && $mark < 60) {
        echo "(B) <br>";
    }
    else if($mark >= 33 && $mark < 50) {
        echo "(C) <br>";
    }
    else if($mark >= 0 && $mark < 32) {
        echo "(F) <br>";
    }
    else if($mark > 100 || $mark < 0) {
        echo "(N/A) <br>";
    }
}

?> 