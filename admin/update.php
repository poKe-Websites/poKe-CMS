<?php

// Include the update class.
require_once 'functions/update.class.php';
// Init the Update class.
$update = new Update('http://tecflare.cu.cc/cdn-packages/latest.zip', 'http://tecflare.cu.cc/cdn-packages/version.ini');
// Check if a new version is available.
if ($update->checkVersion()) {
    $update->execute('../');
}
