
<?php
include 'functions/header.php';
?>
<ol class="breadcrumb">
  <li><div>Home</a></li>
  <li class="active">Account</li>
</ol>
<h1 class="page-header">My Account</h1>
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
<p>Changing your password is a great idea because it prevents hackers.</p>
<form method="post" action="action.php?password">
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 form-control-label">Password</label>
    <div class="col-sm-10">
        <input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>">
      <input type="password" name="password_ch" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
    <div class="form-group row">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-secondary">Change Password</button>
    </div>
  </div>
  </form>
<?php
include 'functions/footer.php';
?>