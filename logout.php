<?php
session_start();
$_SESSION['login_status'] = false;
$_SESSION['user_id'] = null;
$_SESSION['logout_info'] = "Logout Successfully";
header("Location: login.php");
