<?php
session_start();
include('include/config.php');


if(strlen($_SESSION['user_login'])==0)
{	
header('location:index.php');
}


if(isset($_POST['Submit']))
{
 $oldpass=$_POST['opwd'];
 $nic=$_SESSION['nic'];
 $newpassword=$_POST['npwd'];
$sql=mysqli_query($con,"SELECT password FROM members_info where password='$oldpass' && nicnumber='$nic'");
$num=mysqli_fetch_array($sql);

if($num>0)
{
 $con=mysqli_query($con,"update members_info set password=' $newpassword' where nicnumber='$nic'");
$_SESSION['msg1']="Password Changed Successfully !!";
header('location:users-login.php');
}

else
{
$_SESSION['msg1']="Old Password not match !!";
}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>user |  receipents</title>
	<link type="text/css" href="admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="admin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="admin/css/theme.css" rel="stylesheet">
	<link type="text/css" href="admin/images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>

	<script >
function valid()
{
if(document.chngpwd.opwd.value=="")
{
alert("Old Password Filed is Empty !!");
document.chngpwd.opwd.focus();
return false;
}
else if(document.chngpwd.npwd.value=="")
{
alert("New Password Filed is Empty !!");
document.chngpwd.npwd.focus();
return false;
}
else if(document.chngpwd.cpwd.value=="")
{
alert("Confirm Password Filed is Empty !!");
document.chngpwd.cpwd.focus();
return false;
}
else if(document.chngpwd.npwd.value!= document.chngpwd.cpwd.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.cpwd.focus();
return false;
}
return true;
}
</script>
	
</head>
<body>
<?php include('include/header.php');?>

	<div class="wrapper">
		<div class="container-fluid">
			<div class="row">
<?php include('include/sidebar.php');?>				
			<div class="span10">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Member Change Password</h3>
							</div>
							<div class="module-body">

									<?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>
									<br />


			<form class="form-horizontal row-fluid" name="chngpwd" action="" method="post" onSubmit="return valid();">
									
<div class="control-group">
<label class="control-label" for="basicinput">Current Password</label>
<div class="controls">
<input type="password" placeholder="Enter your current Password"  name="opwd" id="opwd" class="span8 tip" required>
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">New Password</label>
<div class="controls">
<input type="password" placeholder="Enter your new Password"  name="npwd" id="npwd" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Confirm Password</label>
<div class="controls">
<input type="password" placeholder="Enter your new Password Again" name="cpwd" id="cpwd" class="span8 tip" required>
</div>
</div>

										<div class="control-group">
											<div class="controls">
												<input type="submit" class="btn btn-success" name="Submit" value="Change Password"/>
											</div>
										</div>
									</form>
							</div>
						</div>

					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

<?php include('include/footer.php');?>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>
