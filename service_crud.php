<?php
require_once("dbConnection.php");
session_start();

if (!$_SESSION['login_status']) {
    header("Location: login.php");
};

$title = "";
$description = "";
$id = 0;
$update = false;

if (isset($_POST['add'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    mysqli_query($conn, "INSERT INTO it_services (user_id, service_category,description) VALUES (1,'$title','$description')");
    $_SESSION['alert'] = "Service added successfully!";
    header("location: product.php");
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    mysqli_query($conn, "UPDATE it_services SET service_category='$title', description='$description' WHERE service_id=$id");
    $_SESSION['alert'] = "Service Updated successfully!";
    header("location: product.php");
}


if (isset($_GET['del'])) {
    $id = $_GET['del'];

    mysqli_query($conn, "DELETE FROM it_services WHERE service_id=$id");
    $_SESSION['alert'] = "Service Deleted Successfully";
    header("location: product.php");
}
