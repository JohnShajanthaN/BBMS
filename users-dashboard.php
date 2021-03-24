
<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['user_login'])==0)
	{	
header('location:index.php');
}
else{

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>user |  dashboard</title>
	<link type="text/css" href="admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="admin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="admin/css/theme.css" rel="stylesheet">
	<link type="text/css" href="admin/images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>
<?php include('include/header.php');?>

	<div class="wrapper">
		<div class="container-fluid">
			<div class="row">
<?php include('include/sidebar.php');?>				
			<div class="span9">
					<div class="content">

	<div class="module">
							<div class="module-head">
								<center><h3>Welcome back : <?php echo $_SESSION['username']?> </h3></center>
							</div>
							<div class="module-body table">
							<br>
							</div>
						</div>
							<div class="module-head">
								<h3>View Today's Requests :   <a href="users-today-requests.php">Today's Requests</a> </h3>
							</div>
							<div class="module-head">
								<h3>See Your Profile :  <a href="users-profile.php">Profile</a> </h3>
							</div>
							<div class="module-head">
								<h3>Blood Groups and stock :   <a href="users-bloodgroups.php">Blood stock</a> </h3>
							</div>
							
							<div class="module-head">
								<h3>Recipients Information :   <a href="users-recipients.php">Recipients </a> </h3>
							</div>
							
							<div class="module-head">
								<h3>View Medical Information :   <a href="users-medical.php">Medicals Info</a> </h3>
							</div>
							<div class="module-head">
								<h3>View Donor's Information :   <a href="users-donors.php">Donor's  Info</a> </h3>
							</div>
							<div class="module-head">
								<h3>View User Login LOG :   <a href="users-login.php">Login log</a> </h3>
							</div>
							<div class="module-head">
								<h3>Change Password :   <a href="users-change-password.php">password change</a> </h3>
							</div>
							<div class="module-head">
								<h3>Leave & Logout :   <a href="users-logout.php">logout</a> </h3>
							</div>
							<div class="module-body table">
							<br>
							</div>
						</div>
						

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

<?php include('include/footer.php');?>

	<script src="admin/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="admin/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="admin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="admin/scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="admin/scripts/datatables/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
</body>
<?php } ?>