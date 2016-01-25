 <?php
 if (file_exists('../install')) {
    echo "Please Delete Install Directiory";
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
 
    <link href="css/bootstrap.css" rel="stylesheet">
 <link href="css/metro.css" rel="stylesheet">
 <link href="css/cover.css" rel="stylesheet">
<script src="js/metro.js"></script>
<script src="js/uikit.js"></script>
<link rel="stylesheet" href="css/uikit.css">
  </head>
  <body>

     <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">poKe Admin</h3>
           <?php if (isset($_GET['alert'])) {
    ?>
            <!--Alert-->  <nav class="nav nav-masthead">
           <div class="ns-box ns-growl ns-effect-slide ns-type-notice ns-show">
	<div class="ns-box-inner">
		<div class="alert alert-danger alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong>Access Denied</strong> Your username or password is incorrect.
</div>
	</div>
	<?php

} else {
    ?>
	         <!--Alert-->  <nav class="nav nav-masthead">
           <div class="ns-box ns-growl ns-effect-slide ns-type-notice ns-show">
	<div class="ns-box-inner">

	</div>
	<?php

}
           ?>
	<span class="ns-close"></span>
</div>	
              </nav>
            </div>
          </div>
          <div style="background-color: rgba(245, 245, 245, 0.4);" class="card  <?php if (isset($_GET['alert'])) {
    ?>uk-animation-shake<?php 
} ?>">
<form class="form-signin" method="post" action="validate.php">
    <img src="images/photo.png" alt="Card image">
          <div class="inner cover">
            <h2 class="card-title" style="color: black">Please Sign In</h2>
            </div>
            
            <div class="card-block">
            <p class="lead"> <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" name="usernamep" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword"  class="sr-only">Password</label>
        <input type="password" name="passwordp" id="inputPassword" class="form-control" placeholder="Password" required>
      </p>
            <p class="lead">
               <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
      </div>
            </p>
          </div>

         

        </div>
 <footer class="site-footer">
  Copyright &copy; Tecflare Corporation.
</footer>
      </div>

    </div><!-- /container -->
   
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>