
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
								<h3>Receipents</h3>
							</div>
							<div class="module-body table">
	
							
							<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>#</th>
											<th>Full Name</th>
											<th>NIC Number</th>
											<th>Blood Group</th>
											<th>Email Address</th>
											<th>Phone Number</th>
											<th>Address</th>
											<th>Obtained Date</th>
										</tr>
									</thead>
									<tbody>

<?php $query=mysqli_query($con,"select * from bloodbank_info where status='Received' && nicnumber='".$_SESSION['nic']."' ");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
	$email = $row['email'];
	$code = $row['code']; 
	$obtaindate = $row['CreateTime'];
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
$queryreceiver=mysqli_query($con,"select * from members_info where emailaddress='$emailcode'");
while($rowreceiver=mysqli_fetch_array($queryreceiver))
{
	$namereceiver = $rowreceiver['fullname'];
	$nicnumber = $rowreceiver['nicnumber'];
	$bloodtype = $rowreceiver['bloodtype'];
	$emailaddress = $rowreceiver['emailaddress'];
	$contactnumber = $rowreceiver['primarycontactnumber'];
	$address = $rowreceiver['address'];
}
}
else
{
	$namereceiver = "None";
}

?>

										<tr>
											<td><?php echo htmlentities($cnt);?></td>	
											<td><?php echo $namereceiver?></td>
											<td><?php echo $nicnumber?></td>
											<td><?php echo $bloodtype;?></td>
											<td><?php echo $emailaddress?></td>
											<td><?php echo $contactnumber;?></td>
											<td><?php echo $address;?></td>
											<td><?php echo $obtaindate?></td>
											

<?php $cnt=$cnt+1; } ?>

								</table>

							<!--
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
											<th>Obtain Date</th>
										</tr>
									</thead>
									<tbody>
									

<?php $query=mysqli_query($con,"select bi.code,bi.hospital,bi.bloodtype,mi.emailaddress as email,mi.primarycontactnumber as phonenumber,mi.address,bi.CreateTime from bloodbank_info as bi join members_info as mi on bi.nicnumber=mi.nicnumber where bi.nicnumber='".$_SESSION['nic']."' && bi.status='Received' ");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>									
											<tr>
											
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo substr( htmlentities($row['code']),0,10 ) ;?></td>
											<td><?php echo htmlentities($row['hospital']);?></td>
											<td> <?php echo htmlentities($row['bloodtype']);?></td>
											<td><?php echo htmlentities($row['email']); ?></td>
											<td> <?php echo htmlentities($row['phonenumber']);?></td>
											<td><?php echo htmlentities($row['address']); ?></td>
											<td><?php echo htmlentities($row['CreateTime']); ?></td>
											
											</tr>

<?php $cnt=$cnt+1; } ?>
										
								</table>
								-->
								
								
								
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