<?php
require_once 'includes/db.php';
$id = $_GET['id'];
$delete_query = "DELETE FROM services WHERE id = $id";
mysqli_query($db_connect, $delete_query);
header('location: service_list.php');
?>