<?php
session_start();
$name = $_POST['name'];
$email_address = $_POST['email_address'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if($name){
    echo "Your name is ".$name;
}
else{
    // echo "nai";
    $_SESSION['name_error'] = "Your name is required";
    header('location: register.php');
}


if($email_address){
    echo "Your email_address is ".$email_address;
}
else{
    // echo "nai";
    $_SESSION['email_address_error'] = "Your email_address is required";
    header('location: register.php');
}
?>