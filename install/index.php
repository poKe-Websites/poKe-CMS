<?php
session_start();
//Secure Code
if (file_exists('install.lock') && !isset($_SESSION['install_lock'])) {
    echo 'The install.lock file exists, please delete it to reinstall';
    die();
} else {
    file_put_contents('install.lock', '');
    $_SESSION['install_lock'] = 'unlocked';
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>poKe installer</title>
 
    <link href="css/bootstrap.css" rel="stylesheet">
 <link href="css/metro.css" rel="stylesheet">
<script src="js/metro.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.2.0/zxcvbn.js"></script>

  </head>
  <body>
   

<div class="app-bar navy"><div class="app-bar-element">Poke Installer</div></div>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-3">poKe New Installer</h1>
    <p class="lead">Welcome to the poKe!</p>
  </div>
</div>
<?php
if (!isset($_GET['install'])) {
    ?>
<div class="alert alert-info" role="alert">
  <strong>Welcome</strong> Thank you for installing poKe. To install please press install.
</div>
     <?php
        if (isset($_GET['error'])) {
            ?>
          <div class="alert alert-warning alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong>Holy guacamole!</strong> Cannot Connect to MySQL.

</div>

          <?php

        }
    ?>
      

<!-- Modal -->
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h4 class="modal-title" id="myModalLabel">Database Credentials</h4>
      </div>
      <div class="modal-body">
   
        <form method="Post" action="database.php" data-role="validator">
           <fieldset class="form-group">
    <label>MySQL Hostname:</label>
    <input type="text" required="true" name="hostname" class="form-control" id="" placeholder="localhost">
  
  </fieldset>
        <fieldset class="form-group">
    <label>Username:</label>
    <input type="text" required="true" name="username" class="form-control" id="" placeholder="root">
  </fieldset>
   <fieldset class="form-group">
    <label>Password:</label>
    <input type="password" required="true" name="password" class="form-control" id="" placeholder="password">
  </fieldset>
  <fieldset class="form-group">
    <label>Database:</label>
    <input type="text" required="true" name="database" class="form-control" id="" placeholder="data">
  </fieldset>

  <div class="modal-dialog" role="document" style="width: 100%;">
    <div class="modal-content">
      <div class="modal-header">
            <fieldset class="form-group">
    <label>Poke Username:</label>
    <input type="text" required="true" name="username_p" class="form-control" id="" placeholder="Username">
  </fieldset>
   <fieldset class="form-group">
    <label>Poke Password:</label>
    <input type="password" required="true" name="password_p" class="form-control" id="myPassword" placeholder="Password">


  </fieldset>
        </div>
        </div>
        </div>
<Br>
  <button type="submit" class="btn btn-primary" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Submit</button>
          </form>
      </div>
      <div class="modal-footer">
      
      </div>
    </div>
  </div>

 
 <?php

} else {
    ?>
<div class="alert alert-success" role="alert">
  <strong>Well done!</strong> You successfully installed to poKe System.
</div>
<center><ul class="list-group">
  <li class="list-group-item">1. Remove install folder</li>
  <li class="list-group-item">2. Login to the Administration Area</li>
</ul></center>
<?php

}
?>
<footer class="footer">
        <p>&copy; Tecflare Corporation</p>
      </footer>


    <script src="js/bootstrap.js"></script>

  </body>
</html>