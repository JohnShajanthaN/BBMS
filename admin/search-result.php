<?php
session_start();
error_reporting(0);
include('include/config.php');
$find="{$_POST['bloodgroup']}";
$nic=$_GET['nic'];

if(isset($_POST['submit']))
{
   $from="Admin";
   $to="ghfgfgh";
   $message="Hi How";

$sql=mysqli_query($con,"insert into emergency_message (From,To,message) values('$from','$to','$message')");

if($sql)
{

echo "Successfully Insert";

}

else
{
echo "Error Occurred";
}

}
	
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
			
			<div class="span5">
			
					<div class="content">

	<div class="module">
							<div class="module-head">
								<h3>Profile Info</h3>
							</div>
							
							
							
							 <form name="search" method="post" action="" enctype="multipart/form-data">
	<!--
	<input class="search-field" placeholder="Search By Blood Group" name="bloodgroup" required="required" style="margin-top:15px;margin-left:550px;padding-left:10px;border-color:darkgrey;border-radius:100px;width:200px;height:25px;font-weight:bold;font-size:14px;" />
	-->					
							
						<div class="form-row">
						
                                    <div style="margin-top:15px;margin-left:105px;padding-left:10px;">
                                        <select name="bloodgroup" style="border-radius:100px;">
                                            <option disabled="disabled" selected="selected">Choose Blood group</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
											<option value="B-">B-</option>
											<option value="AB+" >AB+</option>
											<option value="AB-">AB-</option>
											<option value="O+">O+</option>
											<option value="O-" >O-</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
									
							
									<button class="btn btn-success" type="submit" name="search" style="margin-left:360px;margin-top:-74px;font-weight:bold;font-size:16px;height:30px;border-radius:200px;width:90px;border-color:darkgrey;"> search </button> 
	
						</div>

						</form>
							


		
<?php
$ret=mysqli_query($con,"select * from members_info where bloodtype like '$find' ");

$cnt=1;
$num=mysqli_num_rows($ret);

if($num>0)
{
while ($row=mysqli_fetch_array($ret)) 
{?>			
								<div class="module-body table">
								
								<table cellpadding="0" cellspacing="0" border="0" class="table-bordered" width="85%" align="center">
									
									<thead>
										<tr>
											<th colspan="2"> <center> User Profile </center></th>
										</tr>
									</thead>
									
									<tbody>

										<tr>
											<td> <center> Username </center> </td>
											<td> <center> <?php echo htmlentities($row['fullname']);?> </center> </td>
										</tr>
										<tr>
											<td> <center> Nic Number </center>  </td>
											<td> <center> <?php echo htmlentities($row['nicnumber']);?> </center> </td>
										</tr>
										<tr>
											<td> <center> Blood Group </center> </td>
											<td> <center> <?php echo htmlentities($row['bloodtype']);?> </center> </td>
										</tr>
										<tr>
											<td> <center> DOB </center> </td>
											<td> <center> <?php echo htmlentities($row['dob']);?> </center> </td>
										</tr>
										<tr>
											<td> <center> Age </center> </td>
											<td> <center> <?php echo htmlentities($row['age']);?> </center> </td>
										</tr>
										<tr>
											<td> <center> Address </center> </td>
											<td> <center> <?php echo htmlentities($row['address']);?> </center> </td>
										</tr>
										<tr>
											<td> <center> Contact Number </center> </td>
											<td> <center> <?php echo htmlentities($row['primarycontactnumber']);?> </center> </td>
										</tr>
										<tr>
											<td> <center> Email Address </center> </td>
											<td> <center> <?php echo htmlentities($row['emailaddress']);?> </center> </td>
										</tr>
										
										
										<tr>
												
											<form class="" name="" method="post" enctype="multipart/form-data" action="">
											
											<td colspan="2">
											
											<center> 
											<input class="btn btn-danger" value="Send Message" type="submit" name="submit" style="margin-top:-8px;margin-bottom:-6px;font-weight:bold;font-size:16px;border-radius:200px;width:150px;border-color:darkgrey;"> 
										
											</center> 
											
											</td>
											
											</form>	
											
										</tr>
										
											</tbody>
								
								</table>
								
							</div>
							
										
<?php $cnt=$cnt+1;}} ?>
							
								
						</div>						

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
				
				
				
			<div class="span5">	
			<div class="content">

	<div class="module">
	
		
							<div class="module-head">
								<h3>Medical Info</h3>
							</div>
							
							<form name="search" method="post" action="" enctype="multipart/form-data">
	<!--
	<input class="search-field" placeholder="Search By Blood Group" name="bloodgroup" required="required" style="margin-top:15px;margin-left:550px;padding-left:10px;border-color:darkgrey;border-radius:100px;width:200px;height:25px;font-weight:bold;font-size:14px;" />
	-->					
							
						<div class="form-row">
						
                                    <div style="margin-top:15px;margin-left:105px;padding-left:10px;">
                                        <select name="bloodgroup" style="border-radius:100px;">
                                            <option disabled="disabled" selected="selected">Choose Blood group</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
											<option value="B-">B-</option>
											<option value="AB+" >AB+</option>
											<option value="AB-">AB-</option>
											<option value="O+">O+</option>
											<option value="O-" >O-</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
									
									
									<button class="btn btn-success" type="submit" name="search" style="margin-left:360px;margin-top:-74px;font-weight:bold;font-size:16px;height:30px;border-radius:200px;width:90px;border-color:darkgrey;"> search </button> 
									
									
						</div>
						


						</form>
							
									
<?php
$ret1=mysqli_query($con,"select * from medical_info where bloodtype like '$find' GROUP BY nicnumber ");

$cnt1=1;
$num1=mysqli_num_rows($ret1);

if($num1>0)
{
while ($row=mysqli_fetch_array($ret1)) 
{?>			
								<div class="module-body table">
								
								<table cellpadding="0" cellspacing="0" border="0" class="table-bordered" width="85%" align="center">
									
									<thead>
										<tr>
											<th colspan="2"> <center> User Medical </center></th>
										</tr>
									</thead>
									
									<tbody>

										<tr>
											<td> <center> Weight </center> </td>
											<td> <center> <?php echo htmlentities($row['weight']);?> </center> </td>
										</tr>
										<tr>
											<td> <center>Blood Group</center>  </td>
											<td> <center> <?php echo htmlentities($row['bloodtype']);?> </center> </td>
										</tr>
										<tr>
											<td> <center> Haemoglobin Level </center> </td>
											<td> <center> <?php echo htmlentities($row['haemoglobinlevel']);?> </center> </td>
										</tr>
										<tr>
											<td> <center> Diabetics Medicine </center> </td>
											<td> <center> <?php echo htmlentities($row['diabeticsmedicine']);?> </center> </td>
										</tr>
										<tr>
											<td> <center> Pressure Control </center> </td>
											<td> <center> <?php echo htmlentities($row['pressurecontrol']);?> </center> </td>
										</tr>
										<tr>
											<td> <center> Cancer </center> </td>
											<td> <center> <?php echo htmlentities($row['cancer']);?> </center> </td>
										</tr>
										<tr>
											<td> <center> Thyroid </center> </td>
											<td> <center> <?php echo htmlentities($row['thyroid']);?> </center> </td>
										</tr>
										<tr>
											<td> <center> Aids </center> </td>
											<td> <center> <?php echo htmlentities($row['aids']);?> </center> </td>
										</tr>
										<tr>
											<td> <center> HomoSexual </center> </td>
											<td> <center> <?php echo htmlentities($row['homosexual']);?> </center> </td>
										</tr>
										
										
								
										
											</tbody>
								
								</table>
								
							</div>
							
										
<?php $cnt1=$cnt1+1;}} ?>
							
								
						</div>						

						
						
					</div><!--/.content-->
			</div>
				
				
				
				
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

<?php include('include/footer.php');?>



<!--
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
-->
	

</body>
</html>