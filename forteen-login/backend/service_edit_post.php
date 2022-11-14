<?php
require_once 'includes/db.php';

$service_name = $_POST['service_name'];
$service_description = $_POST['service_description'];
$service_icon = $_POST['service_icon'];
$status = $_POST['status'];
$service_id = $_POST['service_id'];
$update_query = "UPDATE services SET service_name = '$service_name', service_description = '$service_description', service_icon = '$service_icon', status = '$status' WHERE id = $service_id";

mysqli_query($db_connect, $update_query);

header('location: service_list.php');
?>