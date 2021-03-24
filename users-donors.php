
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
	<title>user |  receipents</title>
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
			<div class="span10">
					<div class="content">

	<div class="module">
							<div class="module-head">
								<h3>Doner</h3>
							</div>
							<div class="module-body table">
	
							
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>#</th>
											<th>NIC Number</th>
											<th>Hospital</th>
											<th>Blood Group</th>
											<th>Email Address</th>
											<th>Phone Number</th>
											<th>Address</th>
											<th>Donated Date</th>
										</tr>
									</thead>
									<tbody>

<?php $query=mysqli_query($con,"select * from bloodbank_info where nicnumber='".$_SESSION['nic']."' && status='Donated' ");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>									
											<tr>
											
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($row['nicnumber']);?></td>
											<td><?php echo htmlentities($row['hospital']);?></td>
											<td> <?php echo htmlentities($row['bloodtype']);?></td>
											<td><?php echo htmlentities($row['email']); ?></td>
											<td> <?php echo htmlentities($row['phonenumber']);?></td>
											<td><?php echo htmlentities($row['address']); ?></td>
											<td><?php echo htmlentities($row['CreateTime']); ?></td>
											
											</tr>

<?php $cnt=$cnt+1; } ?>
										
								</table>
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