
<?php
include '../config.php';
include 'functions/header.php';
?>
<ol class="breadcrumb">
  <li><div>Home</a></li>
  <li class="active">Dashboard</li>
</ol>
<h1 class="page-header">Dashboard</h1>

<div class="jumbotron">
  <h1 class="display-3">Welcome Back, <?php echo $_SESSION['username']; ?></h1>
  <p class="lead">This is our brand new control panel designed using bootstrap 4.</p>
  <hr class="m-y-2">
  <p>It is still in development so do not expect much. This control panel will be a lot better than the old multisite control panel.</p>
  <p class="lead">
   
  </p>
</div>
<?php
// Include the update class.
require_once 'functions/update.class.php';
// Init the Update class.
$update = new Update('http://tecflare.cu.cc/cdn-packages/latest.zip', 'http://tecflare.cu.cc/cdn-packages/version.ini');
// Check if a new version is available.
if ($update->checkVersion()) {
    ?>
<div class="alert alert-danger alert-dismissible fade in uk-animation-shake" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>

  <i class="fa fa-times fa-fw"></i><strong>Security Warning!</strong> An update is availible. <a href="update.php" class="btn btn-primary">Update Now</a>

</div>
<?php

}
?>
<?php
//SECURITY INFORMATIONAL INSTALLATION **IMPORTANT**
if (file_exists('../install')) {
    ?>
<div class="alert alert-danger alert-dismissible fade in uk-animation-shake" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>

  <i class="fa fa-times fa-fw"></i><strong>Security Warning!</strong> The "install" directory still exists and should be deleted.

</div>
<?php

}
?>
<style>
  #tile {
    width: 210px;
    height: 118px;

    background-color: rgba(245, 245, 245, 0.4);
    transition: background-position 2s;
    -moz-transition: background-position 2s; /* Firefox Support */
    -webkit-transition: background-position 2s; /* Chrome and Safari Support */
    -o-transition: background-position 2s; /* Opera Support */
}

#tile:hover {
    border-color: #219D9D;
    background-position: bottom;
}

#tileCaption {
    position: relative;
    top: 95px;
    left: 12px;
}
</style><center><div id="tile"  class="col-sm-6 card card-block">
<h1>0</h1>Items
</div>

</style><div id="tile"  class="col-sm-6 card card-block">
<h1>0</h1>Pages
</div>
<div id="tile"  class="col-sm-6 card card-block">
<h1>0</h1>Posts
</div>
</style><div id="tile"  class="col-sm-6 card card-block">
<h1><?php
    $count = 0;
$con = mysqli_connect($hostname, $username, $password, $db_name);
$sql = 'SELECT * FROM Administrators';
$result = mysqli_query($con, $sql);
 while ($row = mysqli_fetch_row($result)) {
     $count = $count + 1;
 }
   mysqli_free_result($result);
    mysqli_close($con);
    echo $count;
    ?></h1>Administrators
</div>
  </center>
<div class="row">
  <div class="col-sm-6 alert alert-dismissible fade in" role="alert">
    <div class="card card-block">
      <h3 class="card-title">Add a new Post</h3>
      <p class="card-text">When creating a website you always need a blog.</p>
      <a href="post.php" class="btn btn-primary"><i class="fa fa-arrow-right fa-fw"></i>Visit Blog <span class="label label-success">Recommended</span></a>
    <a class="btn btn-danger" data-dismiss="alert" aria-label="Close">Dismiss</a>
    </div>
  </div>
  <div class="col-sm-6 alert alert-dismissible fade in" role="alert">
    
    <div class="card card-block">
      <h3 class="card-title">Add a new Page </h3>
      <p class="card-text">Pages make your website a website with rich content.</p>
      <a href="pages.php" class="btn btn-primary"><i class="fa fa-arrow-right fa-fw"></i>Visit Page Creator <span class="label label-success">Recommended</span></a>
      <a class="btn btn-danger" data-dismiss="alert" aria-label="Close">Dismiss</a>
    </div>
    
  </div>
</div>


<?php
include 'functions/footer.php';
?>