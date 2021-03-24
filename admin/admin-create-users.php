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
	$bloodtype=$_POST['bloodtype'];
	$password=$_POST['password'];
	$password_confirm=$_POST['password_confirm'];
$query=mysqli_query($con,"insert into members_info(fullname,usertype,nicnumber,dob,gender,age,
province,district,city,area,address,primarycontactnumber,secondarycontactnumber,emailaddress,bloodtype,password) 
values ('$fullname','$usertype','$nicnumber',
'$dob','$gender','$age','$province','$distric','$city','$area','$address','$primaryphone','$secondaryphone','$email','$bloodtype','$password')");

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
if(!$log)
{
	echo("Error description: " . mysqli_error($con));
	
}
	header("location:users-medicals-form.php");
}

else
{
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
	<title>Admin | Create User</title>
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
								<h3>Create An Admin</h3>
							</div>
							<div class="module-body">

									<?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-success">
									<strong>Well done!</strong>	
									</div>
<?php } ?>


									<?php if(isset($_GET['del']))
{?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oh snap!</strong> 	
									</div>
<?php } ?>

									<br />

			<form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">

<div class="control-group">
<label class="control-label" for="basicinput">User Type</label>
<div class="controls">
<select name="usertype" class="span8 tip" onChange="getSubcat(this.value);"  required>
<option>Admin</option>
<option>Member</option>

</select>
</div>
</div>

					


<div class="control-group">
<label class="control-label" for="basicinput">Full Name</label>
<div class="controls">
<input type="text"    name="fullname"  placeholder="Enter Your Full Name" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">NIC Number</label>
<div class="controls">
<input type="text"    name="nicnumber"  placeholder="Enter NIC Number" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Date Of Birth</label>
<div class="controls">
<input type="date"    name="dob"  placeholder="Enter DOB" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Email</label>
<div class="controls">
<input type="text"    name="email"  placeholder="Enter Email Address" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Age</label>
<div class="controls">
<input type="number"    name="age"  placeholder="Enter Age" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Province</label>
<div class="controls">
<select name="province" class="span8 tip" onChange="getSubcat(this.value);" required>
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option value="Northern">Northern</option>
                                            <option value="Eastern">Eastern</option>
                                            <option value="Western">Western</option>
											<option value="Southern">Southern</option>
											<option value="Central" >Central</option>
											<option value="North Central">North Central</option>
											<option value="North Western">North Western</option>
											<option value="Uva" >Uva</option>
											<option value="Sabaragamuwa" >Sabaragamuwa</option>
                                        </select>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">District</label>
<div class="controls">
<select name="district" class="span8 tip" onChange="getSubcat(this.value);" required>
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option value="Jaffna">Jaffna</option>
                                            <option value="Ampara">Ampara</option>
                                            <option value="Anuradhapura">Anuradhapura</option>
											<option value="Badulla">Badulla</option>
											<option value="Batticaloa" >Batticaloa</option>
											<option value="Colombo">Colombo</option>
											<option value="Galle">Galle</option>
											<option value="Gampaha">Gampaha</option>
											<option value="Hambantota">Hambantota</option>
											<option value="Kalutara">Kalutara</option>
											<option value="Kandy">Kandy</option>
											<option value="Kegalle">Kegalle</option>
											<option value="Killinochchi">Killinochchi</option>
											<option value="Kurunegala">Kurunegala</option>
											<option value="Mannar">Mannar</option>
											<option value="Matale">Matale</option>
											<option value="Matara">Matara</option>
											<option value="Monaragala">Monaragala</option>
											<option value="Mullaitivu">Mullaitivu</option>
											<option value="Nuwara_Eliya">Nuwara_Eliya</option>
											<option value="Polonnaruwa">Polonnaruwa</option>
											<option value="Puttalam">Puttalam</option>
											<option value="Ratanapura">Ratanapura</option>
											<option value="Trincomalee">Trincomalee</option>
											<option value="vavuniya">vavuniya</option>
</select>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">City</label>
<div class="controls">
<input type="text"    name="city"  placeholder="Enter City Name" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Area</label>
<div class="controls">
<input type="text"    name="area"  placeholder="Enter Area Name" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Address</label>
<div class="controls">
<input type="text"    name="address"  placeholder="Enter Address" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Primary Phone Number</label>
<div class="controls">
<input type="number"    name="pnumber"  placeholder="Enter Primary Phone Number" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Secondary phone Number</label>
<div class="controls">
<input type="number"    name="snumber"  placeholder="Enter Secondary Phone Number" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Gender</label>
<div class="controls">
<select   name="gender"  id="productAvailability" class="span8 tip" required>
<option value="">Select</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Custom">Custom</option>
</select>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Blood Groups</label>
<div class="controls">
<select   name="bloodtype"  id="productAvailability" class="span8 tip" required>
<option value="">Select</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB_</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
</select>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Password</label>
<div class="controls">
<input type="password"    name="password"  placeholder="Enter Password" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Confirm Password</label>
<div class="controls">
<input type="password"    name="password_confirm"  placeholder="Retype Your Password" class="span8 tip" required>
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