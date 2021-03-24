
<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['admin_login'])==0)
	{	
header('location:index.php');
}
else{
	
if(isset($_POST['submit'])){
	$usertype = $_POST['usertype'];
	$fullname = $_POST['fullname'];
	$fullname = $_POST['fullname'];
	$nicnumber=$_POST['nicnumber'];
	$dob=$_POST['dob'];
	$email=$_POST['email'];
	$age=$_POST['age'];
	$province=$_POST['province'];
	$distric=$_POST['district'];
	$city=$_POST['city'];
	$area=$_POST['area'];
	$address=$_POST['address'];
	$primaryphone=$_POST['pnumber'];
	$secondaryphone=$_POST['snumber'];
	$gender=$_POST['gender'];
	$password=$_POST['password'];
	$password_confirm=$_POST['password_confirm'];
$query=mysqli_query($con,"insert into members_info(fullname,usertype,nicnumber,dob,gender,age,
province,district,city,area,address,primarycontactnumber,secondarycontactnumber,emailaddress,password) 
values ('$fullname','$usertype','$nicnumber',
'$dob','$gender','$age','$province','$distric','$city','$area','$address','$primaryphone','$secondaryphone','$email','$password')");

if($query)
{
	$_SESSION['login']=$email;
$_SESSION['phonenumber']=$primaryphone;
$_SESSION['username']=$fullname;
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
date_default_timezone_set('Asia/Kolkata');
$ldate=date( 'd-m-Y h:i:s A', time () );
$log=mysqli_query($con,"insert into userlogs(userEmail,userip,status,logintime,logouttime) values('$email','$uip','$status','$ldate','$ldate')");
if(!$log){
	echo("Error description: " . mysqli_error($con));
	
}
	//header("location:user-dashboard.php");
}
else{
	
	echo $usertype = $_POST['usertype'];
	echo $fullname = $_POST['fullname'];
	echo $nicnumber=$_POST['nicnumber'];
	echo $dob=$_POST['dob'];
	echo $email=$_POST['email'];
	echo $age=$_POST['age'];
	echo $province=$_POST['province'];
	echo $distric=$_POST['district'];
	echo $city=$_POST['city'];
	echo $area=$_POST['area'];
	echo $address=$_POST['address'];
	echo $primaryphone=$_POST['pnumber'];
	echo $secondaryphone=$_POST['snumber'];
	echo $gender=$_POST['gender'];
	echo $password=$_POST['password'];
	echo $password_confirm=$_POST['password_confirm'];

echo("Error description: " . mysqli_error($con));

}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin | Profile</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
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
								<h3><?php  echo $_SESSION['admin_username']; ?></h3>
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
<?php
$query=mysqli_query($con,"select * from members_info where nicnumber='".$_SESSION['admin_nic']."'");
while($row=mysqli_fetch_array($query))
{?>

<div class="control-group">
<label class="control-label" for="basicinput">User Type</label>
<div class="controls">
<select name="usertype" class="span8 tip" onChange="getSubcat(this.value);" value=""  required>
<option><?php echo htmlentities($row['usertype']);?></option>


</select>
</div>
</div>

					


<div class="control-group">
<label class="control-label" for="basicinput">Name</label>
<div class="controls">
<input type="text"    name="fullname"  placeholder="Enter Product Name" class="span8 tip" value="<?php echo htmlentities($row['fullname']);?>" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">NIC Number</label>
<div class="controls">
<input type="text"    name="nicnumber"  placeholder="Enter Product Name" value="<?php echo htmlentities($row['nicnumber']);?>" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Date Of Birth</label>
<div class="controls">
<input type="date"    name="dob"  placeholder="Enter Product Comapny Name" class="span8 tip" value = "<?php echo htmlentities($row['dob']);?>" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Email</label>
<div class="controls">
<input type="text"    name="email"  placeholder="Enter Product Name" class="span8 tip" value="<?php echo htmlentities($row['emailaddress']);?>" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Age</label>
<div class="controls">
<input type="number"    name="age"  placeholder="Enter Product Name" class="span8 tip" value="<?php echo htmlentities($row['age']);?>" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Province</label>
<div class="controls">
<select name="province" class="span8 tip" onChange="getSubcat(this.value);"  required>
<option value=""><?php echo htmlentities($row['province']);?></option> 
<option>Nothern Province</option>
<option></option>
<option></option>
<option></option>
<option></option>
<option></option>
<option></option>
<option></option>
<option></option>

</select>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">District</label>
<div class="controls">
<input type="text"    name="district"  placeholder="Enter Product Name" class="span8 tip" value="<?php echo htmlentities($row['district']);?>" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">City</label>
<div class="controls">
<input type="text"    name="city"  placeholder="Enter Product Name" class="span8 tip" value="<?php echo htmlentities($row['city']);?>" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Area</label>
<div class="controls">
<input type="text"    name="area"  placeholder="Enter Product Name" class="span8 tip" value="<?php echo htmlentities($row['area']);?>" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Address</label>
<div class="controls">
<input type="text"    name="address"  placeholder="Enter Product Name" class="span8 tip" value="<?php echo htmlentities($row['address']);?>" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Pimary Phone Number</label>
<div class="controls">
<input type="number"    name="pnumber"  placeholder="Enter Product Price" class="span8 tip" value="<?php echo htmlentities($row['primarycontactnumber']);?>" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Secondary phone Number</label>
<div class="controls">
<input type="number"    name="snumber"  placeholder="Enter Product Price" class="span8 tip" value="<?php echo htmlentities($row['secondarycontactnumber']);?>" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Gender</label>
<div class="controls">
<select   name="gender"  id="productAvailability" class="span8 tip" required>
<option value=""><?php echo htmlentities($row['gender']);?></option>
<option value="In Stock">Male</option>
<option value="Out of Stock">Female</option>
<option value="Out of Stock">Custom</option>
</select>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Password</label>
<div class="controls">
<input type="password"    name="password"  placeholder="Enter Product Price" class="span8 tip" value="<?php echo htmlentities($row['password']);?>" required>
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
<?php
}

 ?>