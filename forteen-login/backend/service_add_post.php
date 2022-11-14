<?php
require_once 'includes/db.php';

$service_name = $_POST['service_name'];
$service_description = $_POST['service_description'];
$service_icon = $_POST['service_icon'];
$status = $_POST['status'];

$insert_query = "INSERT INTO services (service_name, service_description, service_icon, status) VALUES ('$service_name', '$service_description', '$service_icon', '$status')";
mysqli_query($db_connect, $insert_query);

header('location: service_list.php');
?>