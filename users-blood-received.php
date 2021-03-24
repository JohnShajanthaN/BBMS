<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['user_login'])==0)
	{	
header('location:index.php');
}
else{
	
	$query=mysqli_query($con,"select * from members_info where emailaddress='".$_SESSION['email']."'");
while($row=mysqli_fetch_array($query)){
	
	$nicnumber = $row['nicnumber'];
	$bloodtype = $row['bloodtype'];
	$hospital="Jaffna Central Hospital";
	$email=$row['emailaddress'];
	$phonenumber=$row['primarycontactnumber'];
	$address=$row['address'];
}
	
if(isset($_POST['submit'])){
	$receivedscode = $_POST['receivedscode'];
	
$query=mysqli_query($con,"insert into bloodbank_info(code,nicnumber,bloodtype,hospital,email,phonenumber,
address,status) 
values ('$receivedscode','$nicnumber','$bloodtype',
'$hospital','$email','$phonenumber','$address','Received')");

$query1=mysqli_query($con,"insert into blood_sent_info(receivedscode,nicnumber,bloodtype,hospital,email,phonenumber,
address) 
values ('$receivedscode','$nicnumber','$bloodtype',
'$hospital','$email','$phonenumber','$address')");

$query2 = mysqli_query($con,"DELETE FROM blood_received_info where donorscode = '$receivedscode'");

if($query&&$query1&&$query2)
{	
	
	header("location:users-dashboard.php");
	
}
else{
	
	$receivedscode = $_POST['receivedscode'];
	$nicnumber = $row['nicnumber'];
	$bloodtype = $row['bloodtype'];
	$hospital="Hello";
	$email=$row['emailaddress'];
	$phonenumber=$row['primarycontactnumber'];
	$address=$row['address'];

echo("Error description: " . mysqli_error($con));

}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>user | blood</title>
	<link type="text/css" href="admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="admin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="admin/css/theme.css" rel="stylesheet">
	<link type="text/css" href="admin/images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

   <script>
function getSubcat(val) {
	$.ajax({
	type: "POST",
	url: "get_subcat.php",
	data:'cat_id='+val,
	success: function(data){
		$("#subcategory").html(data);
	}
	});
}
function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>	


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
								<h3>Blood Received Form</h3>
							</div>
							<div class="module-body">

									<?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Well done!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>


									<?php if(isset($_GET['del']))
{?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oh snap!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
									</div>
<?php } ?>

									<br />

			<form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">

					
<?php $query=mysqli_query($con,"select * from members_info where emailaddress='".$_SESSION['email']."'");
while($row=mysqli_fetch_array($query)){
	

?>

<div class="control-group">
<label class="control-label" for="basicinput">Reference Number</label>
<div class="controls">
<input type="text"    name="receivedscode" value=""  class="span8 tip" required>
</div>
</div>
<!---
<div class="control-group">
<label class="control-label" for="basicinput">NIC Number</label>
<div class="controls">
<input type="text"    name="nicnumber"  value="<?php echo htmlentities($row['nicnumber']);?>" class="span8 tip" required>
</div>
</div>
<?php $query1=mysqli_query($con,"select * from medical_info where nicnumber='".$_SESSION['nic']."'");
while($row1=mysqli_fetch_array($query1)){
?>
<div class="control-group">
<label class="control-label" for="basicinput">Blood Group</label>
<div class="controls">
<select name="bloodtype" class="span8 tip" onChange="getSubcat(this.value);"  required>
<option value=""><?php echo htmlentities($row1['bloodtype']);?></option> 
<option>A+</option>
<option>A-</option>
<option>B+</option>
<option>B-</option>
<option>AB+</option>
<option>AB-</option>
<option>O+</option>
<option>O-</option>
</select>
</div>
</div>
<?php }?>
<div class="control-group">
<label class="control-label" for="basicinput">Hospital Name</label>
<div class="controls">
<input type="text"    name="hospital"  placeholder="Enter Hospital Name" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Email</label>
<div class="controls">
<input type="text"    name="email"  value="<?php echo htmlentities($row['emailaddress']);?>" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Phone Number</label>
<div class="controls">
<input type="number"    name="phonenumber"  value="<?php echo htmlentities($row['primarycontactnumber']);?>" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Address</label>
<div class="controls">
<input type="text"    name="address"  value="<?php echo htmlentities($row['address']);?>" class="span8 tip" required>
</div>
</div>

<?php }?>


<!--
<div class="control-group">
<label class="control-label" for="basicinput">Product Image1</label>
<div class="controls">
<input type="file" name="productimage1" id="productimage1" value="" class="span8 tip" required>
</div>
</div>
-->

	<div class="control-group">
											<div class="controls" >
												<input type="submit" name="submit" class="btn btn-success" value = "INSERT">
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

