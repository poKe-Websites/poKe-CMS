<?php

/*
 * Tecflare Corporation
 * Copyright Tecflare Corporation
 * Provided by the Tecflare Corporation System
 * * Code has been scanned by styleci.io
 */

$host = $_POST['hostname'];
$username = $_POST['username'];
$password = $_POST['password'];
$database = $_POST['database'];
//Verify Connection
$link = mysqli_connect($host, $username, $password, $database);
/* check connection */
if (mysqli_connect_errno()) {
    header('Location: index.php?error');
    die();
}
/* check if server is alive */
if (!mysqli_ping($link)) {
    header('Location: index.php?error');
    die();
}
$conn = new mysqli($hostname, $username, $password, $database);
 $sql = 'CREATE TABLE Administrators (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
username VARCHAR(1000),
password TEXT
)';
$conn->query($sql);
 $sql = 'CREATE TABLE Settings (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
code VARCHAR(1000),
value VARCHAR(1000)
)';
$conn->query($sql);
 $sql = 'CREATE TABLE Storage (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(99999),
value TEXT
)';
$conn->query($sql);
 $sql = 'CREATE TABLE Blockedips (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
blocked VARCHAR(99999),
value TEXT
)';
$conn->query($sql);
 $sql = 'CREATE TABLE Posts (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(99999),
author VARCHAR(99999),
value TEXT
)';
$conn->query($sql);
 $sql = 'CREATE TABLE Pages (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(99999),
value TEXT
)';
$conn->query($sql);
 $sql = 'CREATE TABLE Items (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(99999),
cost VARCHAR(99999),
description TEXT
)';
$conn->query($sql);
 $sql = 'CREATE TABLE Orders (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
email VARCHAR(99999),
Products TEXT
)';
 $sql = 'CREATE TABLE Comments (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(99999),
about TEXT
)';
$conn->query($sql);
 $sql = 'CREATE TABLE dragdrop (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
value TEXT
)';
$conn->query($sql);
 $sql = "CREATE TABLE Plugins (
filename varchar(127) collate utf8_bin default NULL,
		action tinyint(1) default '0',
		PRIMARY KEY  (`filename`)
)";
$conn->query($sql);

$sql = "INSERT INTO Administrators (id, username, password) VALUES ('1', '".$conn->real_escape_string(addslashes($_POST['username_p']))."', '".substr(sha1($_POST['password_p'],PASSWORD_BCRYPT),-10)."')";

$sql = "INSERT INTO Administrators (id, username, password) VALUES ('1', '".$conn->real_escape_string(addslashes($_POST['username_p']))."', '".md5($conn->real_escape_string(password_hash($_POST['password_p'], PASSWORD_BCRYPT)))."')";

$conn->query($sql);
$sql = "INSERT INTO Settings (id, code, value) VALUES ('1', 'title','Multisite Central')";
$conn->query($sql);
$sql = "INSERT INTO Settings (id, code, value) VALUES ('2', 'maintainanceMode','0')";
$conn->query($sql);
$sql = "INSERT INTO Settings (id, code, value) VALUES ('3', 'welcomemsg','Welcome to Multisite')";
$conn->query($sql);
$conn->query($sql);
$sql = "INSERT INTO Settings (id, code, value) VALUES ('4', 'mail','noemail@gmail.com')";
$conn->query($sql);
$sql = "INSERT INTO Settings (id, code, value) VALUES ('5', 'api','')";
$conn->query($sql);
$conn->close();
$data = '<?php
            $hostname="'.$host.'";
            $username="'.$username.'";
            $password="'.$password.'";
            $db_name="'.$database.'";
            ?>';
        $file = '../config.php';

        $handle = fopen($file, 'a');
        if (fwrite($handle, $data) === false) {
            echo 'Can not write to ('.$file.')';
        }

        fclose($handle);
header('Location: index.php?install');
die();
/* close connection */
mysqli_close($link);
