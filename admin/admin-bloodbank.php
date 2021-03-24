
<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['admin_login'])==0)
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
	<title>Admin |  Bloodbank</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
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
								<h3>Blood Bank</h3>
							</div>
							<div class="module-body table">
	
							
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>#</th>
											<th>Reference Number</th>
											<th>Donor</th>
											<th>Receiver</th>
											<th>Blood Group </th>
											<th>Date & Time</th>
										</tr>
									</thead>
									<tbody>

<?php $query=mysqli_query($con,"select * from bloodbank_info where status='Received'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
	$email = $row['email'];
	$code = $row['code']; 
?>

<?php $query1=mysqli_query($con,"select fullname from members_info where emailaddress='$email'");
while($row1=mysqli_fetch_array($query1))
{
	$name = $row1['fullname'];
}?>	

<?php $querycode=mysqli_query($con,"select email from bloodbank_info where status='Donated' and code ='$code'");
$id = 0;
while($rowcode=mysqli_fetch_array($querycode))
{	
	$emailcode = $rowcode['email'];
	$id = 1;
}
?>	

<?php
if($id == 1)
{
$queryreceiver=mysqli_query($con,"select fullname from members_info where emailaddress='$emailcode'");
while($rowreceiver=mysqli_fetch_array($queryreceiver))
{
	$namereceiver = $rowreceiver['fullname'];
}
}
else
{
	$namereceiver = "None";
}
?>

										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($row['code']);?></td>
											<td><?php echo $namereceiver;?></td>
											<td><?php echo $name;?></td>
											<td><?php echo htmlentities($row['bloodtype']);?></td>
											<td><?php echo htmlentities($row['CreateTime']); ?></td>

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
<?php } ?>