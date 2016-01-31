<?php
//home
if (!file_exists('config.php')) {
    header('Location: install/');
    die();
}
 if (file_exists('install')) {
     echo 'Please Delete Install Directiory';
     die();
 }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>poKe Admin</title>
    <link href="admin/css/bootstrap.css" rel="stylesheet">
 <link href="admin/css/metro.css" rel="stylesheet">
 <link href="admin/css/cover.css" rel="stylesheet">
<script src="admin/js/metro.js"></script>
<script src="admin/js/uikit.js"></script>
<link rel="stylesheet" href="admin/css/uikit.css">
  </head>
  <body>
<nav class="navbar navbar-light  navbar-fixed-top bg-inverse" >
 
  <div class="nav navbar-nav">
      <button class="navbar-toggler nav-item nav-link active " type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
    <i class="fa fa-th"></i>
  </button>
    <a class="nav-item nav-link active" href="#">poKe <span class="sr-only">(current)</span></a>

  </div>

</nav>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <center><img src="uploads/one.png" alt="First slide"></center>
        <div class="carousel-caption">
  </div>
    </div>
    <div class="carousel-item">
      <center><img src="uploads/two.png" alt="First slide"></center>
        <div class="carousel-caption">
  </div>
    </div>
    <div class="carousel-item">
      <center><img src="uploads/three.png" alt="First slide"></center>
        <div class="carousel-caption">
  </div>
    </div>
      <div class="carousel-item">
      <center><img src="uploads/four.png" alt="First slide"></center>
        <div class="carousel-caption">
  </div>
    </div>
  </div>
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="icon-prev" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="icon-next" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
   
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="admin/js/bootstrap.js"></script>
  </body>
</html>
