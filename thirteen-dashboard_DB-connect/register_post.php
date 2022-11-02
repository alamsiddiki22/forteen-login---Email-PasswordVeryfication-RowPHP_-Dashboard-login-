<?php
session_start();
$name = $_POST['name'];
$email_address = $_POST['email_address'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$flag = false;

if($name){
    if(ctype_alpha($name)){
        $_SESSION['old_name'] = $name;
    }
    else{
        $flag = true;
        $_SESSION['name_error'] = "Name is invalid";
    }
}
else{
    $flag = true;
    $_SESSION['name_error'] = "Your name is required";
}

// ---*****--email_address veryfy--*****---
if($email_address){
    if(filter_var($email_address, FILTER_VALIDATE_EMAIL)){
        $_SESSION['old_email_address'] = $email_address;
    }
    else{
        $flag = true;
        $_SESSION['email_error'] = "Your email address is invalid/email you given is invalid format";
    }
}
else{
    $flag = true;
    $_SESSION['email_error'] = "Your email address is required";
}

// password veryfy
if($password){
    if(strlen($password) < 8){
        $flag = true;
        $_SESSION['password_error'] = "Your password is less than 8 character";
    }
    // else{
    //     $_SESSION['old_password'] = $password;
    // }
}
else{
    $flag = true;
    $_SESSION['password_error'] = "Your password is required";
}
if($confirm_password){
    $_SESSION['old_confirm_password'] = $confirm_password;
}
else{
    $flag = true;
    $_SESSION['confirm_password_error'] = "Your confirm password is missing";
}
if($password != $confirm_password){
    $flag = true;
    $_SESSION['confirm_password_error'] = "Password & confirm password does not matched";
}
else{
    if(preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/',$password) != 1){
        $flag = true;
        $_SESSION['password_error'] = "Your password should have a small letter, a capital letter, a number and a special charecters, min 8 max 20";
    }
}
if($flag) {
    header('location: register.php');
}
else{
    $db_connect = mysqli_connect('localhost', 'root', '', 'apple');
    $insert_query = "INSERT INTO users (name, email_address, password) VALUES ('$name', '$email_address', '$password')";
    mysqli_query($db_connect, $insert_query);
    $_SESSION['register_status'] = "success";
    header('location: login.php');
}
?>