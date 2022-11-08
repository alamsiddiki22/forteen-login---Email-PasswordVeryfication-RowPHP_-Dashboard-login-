<?php
session_start();
$db_connect = mysqli_connect('localhost', 'root', '', 'apple');
if(isset($_POST['name_change'])) {
    $old_name = $_SESSION['s_name'];
    $name = $_POST['name'];
    $id = $_SESSION['s_id'];
    $name_update_query = "UPDATE users SET name = '$name' WHERE id = $id";
    mysqli_query($db_connect, $name_update_query);
    $_SESSION['s_name'] = $name;
    $_SESSION['name_change_status'] = "Your name changed succesfully from $old_name to $name";
    header('location: profile.php');
}

if(isset($_POST['photo_upload'])) {
    // echo "photo uploaded.";
    // print_r($_POST);
    $uploaded_file_name = $_FILES['profile_photo'] ['name'];
    $uploaded_file_name_after_explode = explode('.', $uploaded_file_name);
    $extension = end($uploaded_file_name_after_explode);
    $id = $_SESSION['s_id'];
    $new_name = $_SESSION['s_id'].'.'.$extension;
    $temp_location = $_FILES['profile_photo']['tmp_name'];
    $new_location = "uploads/profile_photos/".$new_name;
    move_uploaded_file($temp_location, $new_location);
    $profile_photo_update_query = "UPDATE users SET profile_photo_name = '$new_name' WHERE id = $id";
    mysqli_query($db_connect, $profile_photo_update_query);
    header('location: profile.php');
}
if(isset($_POST['change_password'])) {
    $id = $_SESSION['s_id'];
    $enctypted_password = md5($_POST['current_password']);
    $password_check_query = "SELECT COUNT(*) AS password_check FROM users WHERE id=$id AND password='$enctypted_password'";
    if(mysqli_fetch_assoc(mysqli_query($db_connect, $password_check_query))['password_check'] == 1){
        $enctypted_new_password = md5($_POST['new_password']);
        $password_update_query = "UPDATE users SET password = '$enctypted_new_password' WHERE id=$id";
        mysqli_query($db_connect, $password_update_query);
        echo "New Password Set Successfully!";
    }else{
        echo "Your Current Password is wrong";
    }
}
?>