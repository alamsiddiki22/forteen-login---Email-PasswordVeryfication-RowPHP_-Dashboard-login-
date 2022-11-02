<?php
// echo "Hi , i am here <br>";

echo $_POST['a'] + $_POST['b'];
// echo "english";

foreach($_POST as $subject => $mark) {
    echo $subject." ".$mark;
    if($mark >= 80 && $mark <= 100){
        echo "(A+) <br>";
    }
    if($mark >= 40 && $mark < 50){
        echo "(C) <br>";
    }
    if($mark >= 33 && $mark < 40){
        echo "(D) <br>";
    }
}
?>