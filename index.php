
<?php
/*
Name: Check if Site Installed
*/
error_reporting(E_ALL);
if (!file_exists("config.php")) {
 header("Location: install/");
 die();
}
?>
