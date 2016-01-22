<?php

session_start();
include '../config.php';
include 'functions/rollbar.php';
$config = [
    // required
    'access_token' => '8545589ebc374e4ca8e70db5d302c0f4',
    // optional - environment name. any string will do.
    'environment' => 'test',
];

$set_exception_handler = false;
$set_error_handler = false;
Rollbar::init($config, $set_exception_handler, $set_error_handler);

if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    die();
}
if (isset($_GET['password'])) {
    //die('update Administrators set username="' .addslashes($_POST["username"]) .'", password="' . md5(addslashes($_POST["password_ch"])) .'" where username=' . $_POST["username"]);
    $con = mysqli_connect($hostname, $username, $password, $db_name);
    $sql = 'update Administrators set username="'.addslashes($_POST['username']).'", password="'.md5(addslashes($_POST['password_ch'])).'" where username="'.$_POST['username'].'"';
    mysqli_query($con, $sql);
    mysqli_close($con);
    header('Location: index.php');
}
if (isset($_GET['deluser'])) {
    $conn = new mysqli($hostname, $username, $password, $db_name);
    $sql = "DELETE FROM Administrators WHERE id='".$_GET['usr']."'";
    $conn->query($sql);
    $conn->close();
    header('Location: users.php');
}
if (isset($_GET['mkuser'])) {
    $con = mysqli_connect($hostname, $username, $password, $db_name);
    $sql = 'INSERT INTO Administrators (id, username, password) VALUES ("'.rand(1, 100000).'","'.addslashes($_POST['usename']).'","'.md5(addslashes($_POST['password'])).'")';
    mysqli_query($con, $sql);
    mysqli_close($con);
    header('Location: users.php');
}
if (isset($_GET['slider'])) {
    move_uploaded_file($_FILES['file_source_1']['tmp_name'], '../uploads/one.png');
    move_uploaded_file($_FILES['file_source_2']['tmp_name'], '../uploads/two.png');
    move_uploaded_file($_FILES['file_source_3']['tmp_name'], '../uploads/three.png');
    move_uploaded_file($_FILES['file_source_4']['tmp_name'], '../uploads/four.png');
    header('Location: slider.php?ok');
}
