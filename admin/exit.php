<?php

/*
 * Tecflare Corporation
 * Copyright Tecflare Corporation
 * Provided by the Tecflare Corporation System
 * * Code has been scanned by styleci.io
 */

session_start();
session_destroy();
header('Location: index.php');
