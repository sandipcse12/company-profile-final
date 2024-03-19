<?php

require_once("dbConnection.php");
session_start();

if ($_SESSION['login_status']) {
    header("Location: product.php");
};

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $check = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");

    $info = mysqli_fetch_array($check);
    if (md5($password) == $info['password']) {
        $_SESSION['login_status'] = true;
        $_SESSION['user_id'] = $info['id'];
        header("Location: dashboard.php");
    } else {
        $_SESSION['login_error'] = "Invalid email or password!";
        header("Location: login.php");
    }


}
