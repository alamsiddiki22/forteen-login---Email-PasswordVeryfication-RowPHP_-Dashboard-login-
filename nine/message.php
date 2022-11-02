<?php
// print_r($_POST);
$name = $_POST['name'];
$email_address = $_POST['email_address'];
$phone_number = $_POST['phone_number'];
$message = $_POST['message'];

if(!$name){
    echo "Name dis nai";
}
if(!$email_address){
    echo "Email Address dis nai";
}
if(!$phone_number){
    echo "Phone Number dis nai";
}
if(!$message){
    echo "Message dis nai";
}
else{
    if(str_word_count($message)>10){
        echo "Message length can not be more than 10 words<br>";
    }
}
?>