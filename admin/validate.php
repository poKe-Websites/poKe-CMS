<?php
session_start();
error_reporting(0);
include '../config.php';
$conn = new mysqli($hostname, $username, $password, $db_name);
$query = mysqli_query($conn, "SELECT * FROM `Administrators` WHERE username = '".addslashes($_POST['usernamep'])."' AND password='".password_hash(addslashes($_POST['passwordp']), PASSWORD_BCRYPT)."'");
if (mysqli_num_rows($query) > 0) {
    $_SESSION['username'] = $_POST['usernamep'];
    header('Location: dashboard.php');
} else {
    header('Location: index.php?alert');
    $query = mysqli_query($conn, "SELECT * FROM `Administrators` WHERE username = '".addslashes($_POST['usernamep'])."' AND password='".password_hash(addslashes($_POST['passwordp']), PASSWORD_BCRYPT)."'");
    if (mysqli_num_rows($query) > 0) {
        $_SESSION['username'] = $_POST['usernamep'];
        header('Location: dashboard.php');
    } else {
        header('Location: index.php?alert');
    }
}
?>

