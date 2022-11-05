<?php
session_start();
$db_connect = mysqli_connect('localhost', 'root', '', 'apple');
if(isset($_POST['name_change'])) {
    $name = $_POST['name'];
    $id = $_SESSION['s_id'];
    $name_update_query = "UPDATE users SET name = '$name' WHERE id = $id";
    mysqli_query($db_connect, $name_update_query);
    $_SESSION['s_name'] = $name;
    header('location: profile.php');
}

if(isset($_POST['photo_upload'])) {
    echo "photo uploaded.";
}
?>