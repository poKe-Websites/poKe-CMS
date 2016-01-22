<?php
include("../config.php");
include("functions/header.php");
?>
<ol class="breadcrumb">
  <li><div>Home</a></li>
  <li class="active">Slider</li>
</ol>
<h1 class="page-header">Slider <span class="label label-default">New</span></h1>
<?php
//SECURITY INFORMATIONAL INSTALLATION **IMPORTANT**
if (file_exists("../install")) {
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
<?php
if (isset($_GET["ok"])) {
	?>
	<div class="alert alert-success alert-dismissible fade in uk-animation-shake" role="alert">
		Slider image updated successfully.
		</div>
	<?php
}
?>
<p>The slider images will make your website look better. We recommend 900x500 but it is really up to you.</p>
<hr>
<form method="post" action="action.php?slider" enctype = "multipart/form-data">
<div class="col-sm-6">
<h2>Slider Image One</h2>

		<a class='btn btn-primary' href='javascript:;'>
			Choose File...
			<span class='label label-info' id="upload-file-info"></span>
			<input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file_source_1" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
		</a>
		&nbsp;
		
</div>

	<div class="col-sm-6">
<h2>Slider Image Two</h2>
  <div style="position:relative;">
		<a class='btn btn-primary' href='javascript:;'>
			Choose File...
			<span class='label label-info' id="upload-file-infoa"></span>
			<input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file_source_2" size="40"  onchange='$("#upload-file-infoa").html($(this).val());'>
		</a>
		&nbsp;
		
	</div>
	</div>
	
	<div class="col-sm-6">
<h2>Slider Image Three</h2>
  <div style="position:relative;">
		<a class='btn btn-primary' href='javascript:;'>
			Choose File...
			<span class='label label-info' id="upload-file-infob"></span>
			<input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file_source_3" size="40"  onchange='$("#upload-file-infob").html($(this).val());'>
		</a>
		&nbsp;
		
	</div>
	</div>
	<div class="col-sm-6">
<h2>Slider Image Four</h2>
  <div style="position:relative;">
		<a class='btn btn-primary' href='javascript:;'>
			Choose File...
			<span class='label label-info' id="upload-file-infoc"></span>
			<input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file_source_4" size="40"  onchange='$("#upload-file-infoc").html($(this).val());'>
		</a>
		&nbsp;
		
	</div>
	</div>
<div style="padding: 150px;margin:20px;">
	<button type="submit" name="submit" class="btn btn-warning">Submit</button>
</div>
	</form>
<?php
include("functions/footer.php");
?>