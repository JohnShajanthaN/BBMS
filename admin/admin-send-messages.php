
<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['admin_login'])==0)
{	
header('location:index.php');
}
else
{
	
if(isset($_POST['submit']))
{
	$campaignname = $_POST['camname'];
	$organisor = $_POST['organisor'];
	$location = $_POST['location'];
	$date = $_POST['cdate'];
	$time = $_POST['ctime'];
	$description = $_POST['description'];
$query=mysqli_query($con,"insert into blood_camp(cname,corg,clocation,cdate,ctime,cdescription) 
values ('$campaignname','$organisor','$location','$date','$time','$description')");

if($query)
{

	//header("location:user-dashboard.php");
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
	<title>Admin | Blood Camp</title>
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
							<div class="module-head" style="background-color:lightgrey;">
								<h3 align="center">Blood Campaign</h3>
							</div>
							<div class="module-body">

									<?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
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

			<form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data" action="">


<div class="control-group">
<label class="control-label" for="basicinput">Campaign name</label>
<div class="controls">
<input type="text"   name="camname"  class="span8 tip" required>
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">Organized By</label>
<div class="controls">
<input type="text"    name="organisor"   class="span8 tip" required>
</div>
</div>



                            <div class="control-group">
							<label class="control-label" for="basicinput">Location</label>
                           <div class="controls">
                                        <select name="location">
                                            <option disabled="disabled" selected="selected">Select Location</option>
                                            <option>Jaffna Hospital</option>
                                            <option>Jaffna Hindu College</option>
                                            <option>Jaffna University</option>
											<option>Jaffna SLIATE</option>
                                            <option>College Of Jaffna</option>
                                            <option>University Of College</option>
                                        </select>   
                                    </div>
                                </div>
                         
                       
<div class="control-group">
<label class="control-label" for="basicinput">Date</label>
<div class="controls">
<input type="date"    name="cdate"   class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Time</label>
<div class="controls">
<input type="time"    name="ctime"   class="span8 tip" required>
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">Description</label>
<div class="controls">
<textarea  name="description"   rows="6" class="span8 tip">
</textarea>  
</div>
</div>

	<div class="control-group">
											<div class="controls">
												<input type="submit" name="submit" class="btn btn-success" value="Send Message">
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