
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
	<title>Admin |  Today</title>
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
								<h3>Today's Requests</h3>
							</div>
							<div class="module-body table">
	
							
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>#</th>
											<th>Fullname</th>
											<th>Phone Number </th>
											<th>Blood Group</th>
											<th>Obtain Date </th>
											<th>status </th>
											
										</tr>
									</thead>
									<tbody>
<?php 
 $f1="00:00:00";
$from=date('Y-m-d')." ".$f1;
$t1="23:59:59";
$to=date('Y-m-d')." ".$t1;$query=mysqli_query($con,"select * from recipients_info where requestdatetime Between '$from' and '$to'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>								
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($row['fullname']);?></td>
											<td><?php echo htmlentities($row['phonenumber']);?></td>
											<td> <?php echo htmlentities($row['bloodgroup']);?></td>
											<td><?php echo htmlentities($row['obtaindatetime']); ?></td>
											<td><?php $status = $row['bloodgroup'];
$query1=mysqli_query($con,"select * from blood_received_info where bloodtype = '$status' ");
$num=mysqli_fetch_array($query1);

											
	if($num>0){
		echo "Available " ;
	}else{
		echo "Not Available";
	}		
											
											?></td>
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
<?php } 


?>