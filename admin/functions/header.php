<?php
session_start();
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

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>poKe Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
<script src="js/tether.js"></script>
<script src="js/uikit.js"></script>
    <!-- Custom styles for this template -->
    <link href="css/dash.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/uikit.css">
  </head>

  <body>
  
    <div class="container col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="collapse" id="exCollapsingNavbar">
  <div class="bg-inverse p-a-1">
<nav class="navbar navbar-light bg-faded">
  <ul class="nav navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="dashboard.php">Dashboard <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="account.php">My Account</a>
    </li>
  </ul>
</nav>
  </div>
</div>
<nav class="navbar navbar-light  navbar-fixed-top bg-inverse" >
 
  <div class="nav navbar-nav">
      <button class="navbar-toggler nav-item nav-link active " type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
    <i class="fa fa-th"></i>
  </button>
    <a class="nav-item nav-link active" href="#">poKe <span class="sr-only">(current)</span></a>

  </div>
 <div class="form-inline pull-xs-right">
<!-- Single button -->
<div class="btn-group">
  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <i class="fa fa-user fa-fw"></i><?php echo $_SESSION['username']; ?>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#"><i class="fa fa-cog fa-fw"></i>Settings</a>
    <a class="dropdown-item" href="exit.php"><i class="fa fa-sign-out fa-fw"></i>Log out</a>
  </div>
</div>
</nav>
</div>
  <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="dashboard.php"><i class="fa fa-home fa-fw"></i>Dashboard <span class="sr-only">(current)</span></a></li>
            <li><a href="account.php"><i class="fa fa-user fa-fw"></i>Account</a></li>
            <li><a href="users.php"><i class="fa fa-users fa-fw"></i>Users</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="seo.php"><i class="fa fa-search fa-fw"></i>SEO tools</a></li>
            <li><a href="slider.php"><i class="fa fa-pencil-square-o fa-fw"></i>Slider</a></li>
            <li><a href="footer.php"><i class="fa fa-pencil-square-o fa-fw"></i>Footer</a></li>
            <li><a href="theme.php"><i class="fa fa-pencil-square-o fa-fw"></i>Theme</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="pages.php"><i class="fa fa-file-text fa-fw"></i>Pages</a></li>
            <li><a href="post.php"><i class="fa fa-th fa-fw"></i>Blog</a></li>
            <li><a href="store.php"><i class="fa fa-credit-card fa-fw"></i>Store</a></li>
          </ul>
             <ul class="nav nav-sidebar">
            <li><a href="setting.php"><i class="fa fa-cog fa-fw"></i>Setting</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main ">
          