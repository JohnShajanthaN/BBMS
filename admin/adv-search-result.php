<?php
session_start();
error_reporting(0);
include('include/config.php');
$find="{$_POST['bloodgroup']}";
$findpro="{$_POST['province']}";
$finddis="{$_POST['district']}";
$findcit="{$_POST['city']}";
$findare="{$_POST['area']}";

// $nic=$_GET['nic'];
	
if(isset($_POST['submit']))
{

$from='ghfhfg';
$vart='ghfgfg';
$message='khhghghfkg';

$query=mysqli_query($con,"INSERT INTO emergency_message(From,To,message) VALUES ('$from','$vart','$message')");

if($query)
{
	//header("location:user-dashboard.php");
}
else
{
	echo("Error description: " . mysqli_error($con));

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
			
			<div class="span10">
			
					<div class="content">

	<div class="module">
	
							<div class="module-head">
								<h3>Profile Info</h3>
							</div>
	
	
		 <form name="search" method="post" action="" enctype="multipart/form-data">
	<!--
	<input class="search-field" placeholder="Search By Blood Group" name="bloodgroup" required="required" style="margin-top:15px;margin-left:550px;padding-left:10px;border-color:darkgrey;border-radius:100px;width:200px;height:25px;font-weight:bold;font-size:14px;" />
	-->					
							
						<div class="form-row" style="margin-left:85px;margin-top:15px;">
						      
									<div style="margin-top:5px;margin-left:2px;padding-left:10px;">
									
                                        <select name="province" style="border-radius:100px;width:145px;">
                                            <option disabled="disabled" selected="selected">Choose Province</option>
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
                                        <div class="select-dropdown"></div>
										
                                    </div>
									
									<div style="margin-top:-40px;margin-left:155px;padding-left:10px;">
									
                                        <select name="district" style="border-radius:100px;width:145px;">
                                            <option disabled="disabled" selected="selected">Choose District</option>
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
											<option value="vavuniya">Vavuniya</option>
                                        </select>
                                        <div class="select-dropdown"></div>
										
                                    </div>
									
										<div style="margin-top:-40px;margin-left:310px;padding-left:10px;">
										
                                        <select name="city" style="border-radius:100px;width:145px;">
                                            <option disabled="disabled" selected="selected">Choose City</option>
                                            <option value="Jaffna">Jaffna</option> 
											<option value="Wellawatta">Wellawatta</option> 	
											<option value="Moratuwa">Moratuwa</option> 
											<option value="Dehiwalla">Dehiwalla</option> 																
                                        </select>
                                        <div class="select-dropdown"></div>
										
										</div>
										
										<div style="margin-top:-40px;margin-left:465px;padding-left:10px;">
										
                                        <select name="area" style="border-radius:100px;width:145px;">
                                            <option disabled="disabled" selected="selected">Choose Area</option>
                                            <option value="Kondavil">Kondavil</option> 	
											<option value="Kokuvil">Kokuvil</option> 
											<option value="Kopay">Kopay</option> 
											<option value="Chullipuram">Chullipuram</option> 
											<option value="Inuvil">Inuvil</option> 	
											<option value="Thavady">Thavady</option> 	
											<option value="Chunnakam">Chunnakam</option> 	
											<option value="Mallakam">Mallakam</option> 	
											<option value="Tellipalai">Tellipalai</option> 	
											<option value="Manipay">Manipay</option> 
											<option value="Nellijady">Nellijady</option> 
											<option value="Kiruklaponae">Kiruklaponae</option> 
											<option value="Cross Street">Cross Street</option> 
											<option value="Kalkasduwa">Kalkasduwa</option> 
											
                                        </select>
										
                                        <div class="select-dropdown"></div>
										
										</div>

									<button class="btn btn-success" type="submit" name="search" style="margin-left:635px;margin-top:-72px;font-weight:bold;font-size:16px;height:30px;border-radius:200px;width:130px;border-color:darkgrey;"> search </button> 
	
						</div>

						</form>

		
<?php
$ret=mysqli_query($con,"select * from members_info where province='$findpro' && district='$finddis' && city='$findcit' && area='$findare'  ");

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
											<button class="btn btn-danger" type="submit" name="submit" style="margin-top:-8px;margin-bottom:-6px;font-weight:bold;font-size:16px;border-radius:200px;width:150px;border-color:darkgrey;"> 
											<a href="search-result.php" style="text-decoration:none;color:white;">
											Send Message 
											</a>
											</button>
											</center> 
											
											</td>
											
											</form>	
											
										</tr>
										
											</tbody>
								
								</table>
								
							</div>
							
										
<?php $cnt=$cnt+1;}} ?>

<br> <br> <br>

<div style="border-style:solid;border-width:1px;border-color:lightgrey;border-radius:50px;text-align:center;background-color:lightgreen;font-size:15px;">
<b> Total Number Of Members : <?php echo htmlentities (($cnt-1));?> <b>
<div>
							
								
						</div>						

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
				
						
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