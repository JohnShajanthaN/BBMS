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
	$fullname = $row['fullname'];
	$email=$row['emailaddress'];
	$nicnumber = $row['nicnumber'];
	$phonenumber=$row['primarycontactnumber'];
	$bloodtype = $row['bloodtype'];
	$hospital="Hello";
	
	
	$address=$row['address'];
}
if(isset($_POST['submit'])){
	$numberofunits=$_POST['numberofunits'];
	$obtaindatetime=$_POST['obtaindatetime'];
	$bloodtype = $_POST['bloodgroup'];
	$hospitalname="A";
	$reason=$_POST['reason'];
	$_SESSION['blood']= $bloodtype;
	
	if($bloodtype == 'A+'){
		$type = 1;
		echo "Hello";
	}if($bloodtype == 'A-'){
		$type = 2;
	}if($bloodtype == 'B+'){
		$type = 3;
	}if($bloodtype == 'B-'){
		$type = 4;
	}if($bloodtype == 'AB+'){
		$type = 5;
	}if($bloodtype == 'AB-'){
		$type = 6;
	}if($bloodtype == 'O+'){
		$type = 7;
	}if($bloodtype == 'O-'){
		$type = 8;
	}else{
		$type = 8;
	}
	
$query1=mysqli_query($con,"insert into recipients_info(fullname,email,nicnumber,phonenumber,bloodgroup,numberofunits,
obtaindatetime,hospitalname,reason) 
values ('$fullname','$email','$nicnumber',
'$phonenumber','$bloodtype','$numberofunits','$obtaindatetime','$hospitalname','$reason')");

if($query1)
{	
	$_SESSION['request_blood']= 1;
	$_SESSION['blood']= $bloodtype;
	echo $bloodgroup;
	header("location:users-bloodrequest-view.php?id=".$$type);
}
else{
	
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$nicnumber = $_POST['nicnumber'];
	$phonenumber=$_POST['phonenumber'];
	$bloodgroup=$_POST['bloodgroup'];
	$numberofunits=$_POST['numberofunits'];
	$obtaindatetime=$_POST['obtaindatetime'];
	$hospitalname=$_POST['hospitalname'];
	$reason=$_POST['reason'];

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
								<h3>Blood Request Form</h3>
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

			<form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data" action="">

<div class="control-group">
<label class="control-label" for="basicinput">Blood Group</label>
<div class="controls">
<select name="bloodgroup" class="span8 tip" onChange="getSubcat(this.value);"  required>
<option value="">Select Category</option> 
<option value="A+">A+</option>
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

<div class="control-group">
<label class="control-label" for="basicinput">Number Of Units</label>
<div class="controls">
<input type="number"    name="numberofunits"  placeholder="Number Of Units" class="span8 tip" required>
</div>
</div>



<div class="control-group">
<label class="control-label" for="basicinput">Obtain Date</label>
<div class="controls">
<input type="date"    name="obtaindatetime"  placeholder="Enter Obtain Date" class="span8 tip" required>
</div>
</div>



<div class="control-group">
<label class="control-label" for="basicinput">Reason</label>
<div class="controls">
<input type="text"    name="reason"  placeholder="Enter The Reason" class="span8 tip" required>
</div>
</div>



<!--


<div class="control-group">
<label class="control-label" for="basicinput">Fullname</label>
<div class="controls">
<input type="text"    name="fullname"  placeholder="Enter Product Name" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Email</label>
<div class="controls">
<input type="text"    name="email"  placeholder="Enter Product Name" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">NIC Number</label>
<div class="controls">
<input type="text"    name="nicnumber"  placeholder="Enter Product Name" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Phone Number</label>
<div class="controls">
<input type="number"    name="phonenumber"  placeholder="Enter Product Price" class="span8 tip" required>
</div>
</div>




<div class="control-group">
<label class="control-label" for="basicinput">Hospital Name</label>
<div class="controls">
<input type="text"    name="hospitalname"  placeholder="Enter Product Name" class="span8 tip" required>
</div>
</div>



<!--
<div class="control-group">
<label class="control-label" for="basicinput">Product Image1</label>
<div class="controls">
<input type="file" name="productimage1" id="productimage1" value="" class="span8 tip" required>
</div>
</div>
-->

	<div class="control-group">
											<div class="controls">
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