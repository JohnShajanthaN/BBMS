
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
	<title>Member |  Blood</title>
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
							
							<div class="module-head">
								<center> <b> <font size="4px" color="green"> BLOOD STOCK DETAILS </font>  </b> </center>
							</div>
							
							<div class="module-body table">
								
								<table cellpadding="0" cellspacing="0" border="0" class="table-bordered" width="75%" align="center">
									
									<thead>
									
										<tr>
											<th> <center> Blood Group </center></th>
											<th> <center> Units </center></th>
										</tr>
										
									</thead>
									
									<tbody>
									
									<tr>
									
									<td>
									<h3 align="center">A+ <?php $sql = mysqli_query($con,"SELECT * from blood_received_info where bloodtype='A+'");?> </h3>
									</td>
									<td>
									<h3 align="center"> <?php $rowcount=mysqli_num_rows($sql);   printf("%d  \n",$rowcount); ?> </h3>
									</td>
									
									</tr>
									
									<tr>
									
									<td>
									<h3 align="center">A- <?php $sql = mysqli_query($con,"SELECT * from blood_received_info where bloodtype='A-'");?> </h3>
									</td>
									<td>
									<h3 align="center"> <?php $rowcount=mysqli_num_rows($sql);   printf("%d  \n",$rowcount); ?> </h3>
									</td>
									
									</tr>
									
									<tr>
									
									<td>
									<h3 align="center">B+  <?php $sql = mysqli_query($con,"SELECT * from blood_received_info where bloodtype='B+'");?> </h3>
									</td>
									<td>
									<h3 align="center"> <?php $rowcount=mysqli_num_rows($sql);   printf("%d  \n",$rowcount); ?> </h3>
									</td>
									
									</tr>
									
									<tr>
									
									<td>
									<h3 align="center">B-  <?php $sql = mysqli_query($con,"SELECT * from blood_received_info where bloodtype='B-'");?> </h3>
									</td>
									<td>
									<h3 align="center"> <?php $rowcount=mysqli_num_rows($sql);   printf("%d  \n",$rowcount); ?> </h3>
									</td>
									
									</tr>
									
									<tr>
									
									<td>
									<h3 align="center">AB+  <?php $sql = mysqli_query($con,"SELECT * from blood_received_info where bloodtype='AB+'");?> </h3>
									</td>
									<td>
									<h3 align="center"> <?php $rowcount=mysqli_num_rows($sql);   printf("%d  \n",$rowcount); ?> </h3>
									</td>
									
									</tr>
									
									<tr>
									
									<td>
									<h3 align="center">AB-  <?php $sql = mysqli_query($con,"SELECT * from blood_received_info where bloodtype='AB-'");?> </h3>
									</td>
									<td>
									<h3 align="center"> <?php $rowcount=mysqli_num_rows($sql);   printf("%d  \n",$rowcount); ?> </h3>
									</td>
									
									</tr>
									
									<tr>
									
									<td>
									<h3 align="center">O+  <?php $sql = mysqli_query($con,"SELECT * from blood_received_info where bloodtype='O+'");?> </h3>
									</td>
									<td>
									<h3 align="center"> <?php $rowcount=mysqli_num_rows($sql);   printf("%d  \n",$rowcount); ?> </h3>
									</td>
									
									</tr>
									
									<tr>
									
									<td>
									<h3 align="center">O-  <?php $sql = mysqli_query($con,"SELECT * from blood_received_info where bloodtype='O-'");?> </h3>
									</td>
									<td>
									<h3 align="center"> <?php $rowcount=mysqli_num_rows($sql);   printf("%d  \n",$rowcount); ?> </h3>
									</td>
									
									</tr>
									
									</tbody>
								
								</table>
								
							</div>
	
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
	<script src="scripts/datatables/jquery.dataTables.js"></script>
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
<?php } 


?>