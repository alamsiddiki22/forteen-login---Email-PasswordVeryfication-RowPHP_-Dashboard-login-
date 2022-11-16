<?php
require_once 'includes/db.php';
$id = $_GET['id'];
$update_query = "UPDATE services SET delete_status = 'no' WHERE id = $id";
mysqli_query($db_connect, $update_query);
header('location: service_list.php');
?>