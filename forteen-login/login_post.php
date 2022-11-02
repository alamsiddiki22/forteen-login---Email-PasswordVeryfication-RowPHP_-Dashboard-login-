<?php
session_start();
$email_address = $_POST['email_address'];
$password = md5($_POST['password']);

$db_connect = mysqli_connect('localhost', 'root', '', 'apple');
$select_count_query = "SELECT COUNT(*) AS 'result' FROM users WHERE email_address='$email_address' AND password='$password'";

$from_db = mysqli_query($db_connect, $select_count_query);
if(mysqli_fetch_assoc($from_db)['result'] == 1){
    header('location: backend/dashboard.php');
    // echo "Very good. Welcome";
}else{
    $_SESSION['login_error'] = "Your Email or Password is wrong";
    header('location: login.php');
}
?>