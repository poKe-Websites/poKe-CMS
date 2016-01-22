<?php
include '../config.php';
include 'functions/header.php';
?>
<ol class="breadcrumb">
  <li><div>Home</a></li>
  <li class="active">Users</li>
</ol>
<h1 class="page-header">All Users</h1>
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
<p>
  This is where you can create accounts, if you are looking where to change your password, it will be in the "Accounts" Section.
</p>
<table class="table table-inverse">
  <thead>
    <tr>
      <th>Username</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
       <?php
$con = mysqli_connect($hostname, $username, $password, $db_name);
$sql = 'SELECT * FROM Administrators';

if ($result = mysqli_query($con, $sql)) {
    // Fetch one and one row
  while ($row = mysqli_fetch_row($result)) {
      echo '
          <tr>';
      echo '<td>'.$row[1].'<td>';
      if ($_SESSION['username'] == $row[1]) {
          echo '<td></td>';
      } else {
          echo '<td><a href="action.php?usr='.$row[0].'&deluser">Delete</a></td>';
      }

      echo  '</tr>';
  }
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($con);
?> 
</tbody>
</table>
  <a class="btn btn-primary" data-toggle="collapse" href="#collapse" aria-expanded="false" aria-controls="collapseExample">
    Add User
  </a>
  <div class="collapse" id="collapse">
    <div class="card card-block">
 <div class="page-header">
 <h4 class="card-title">Add User</h4>
</div>
<p class="card-text">
 <form method="POST" action="action.php?mkuser">
    <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Username</span>
  <input type="text" name="usename" class="form-control" placeholder="test" aria-describedby="basic-addon1">
</div>
  <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Password</span>
  <input type="password" name="password" class="form-control" placeholder="test" aria-describedby="basic-addon1">
</div>
<input type="submit" class="btn btn-info" value="Create" role="button">
</form>
</p>
</div>
</div>
<?php
include 'functions/footer.php';
?>