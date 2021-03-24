
<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['user_login'])==0){	
header('location:index.php');
}
else{ if(strlen($_SESSION['ul'])==0){	
header('location:index.php');
}else{
	
	$btype = $_GET['id'];
	echo $btype;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>user |  blood</title>
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

	<div class="module"> <?php $query=mysqli_query($con,"SELECT * FROM blood_received_info WHERE bloodtype = '".$_SESSION['blood']."'");

$donorscode = "";
	$bloodtype = "";
	$address = "";
	$phonenumber = "";
	$email = "";
	$sorry  = "Sorry , We Don't Have ".$bloodtype."Blood Group.";
	$bloodtype = "";

while($row=mysqli_fetch_array($query)){
	$donorscode = $row['donorscode'];
	$bloodtype = $row['bloodtype'];
	$address = $row['address'];
	$phonenumber = $row['phonenumber'];
	$email = $row['email'];
	$sorry = "";
}
	
	?>
							<div class="module-head">
								<center><h3> <?php echo "You can get ".$bloodtype." blood from near bloodbank with our Reference code "; ?> </h3></center>
								<div class="module-body table">
							<br>
							</div>
								<h3> <?php echo  $sorry; ?> </h3>
								<h3> <?php echo  $_SESSION['blood']; ?> </h3>
								<?php //echo $btype;?>
								<h3> <?php echo "Reference Number : ". $donorscode; ?> </h3>		
								<h3> <?php echo "Phone Number : ". $phonenumber; ?> </h3>
								<h3> <?php echo "Blood Group : ". $bloodtype; ?> </h3>
								<h3> <?php echo "Address : ". $address; ?> </h3>
								<h3> <?php echo "Email Address : ". $email; ?> </h3>
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
<?php } }


?>