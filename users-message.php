
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
	<title>user |  messages</title>
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
								<h3 align="center"> Blood Camp</h3>
							</div>
						
							
							
							<?php $query=mysqli_query($con,"select * from blood_camp ORDER BY id DESC");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>
	
			<form class="form-horizontal row-fluid" name="insertproduct" enctype="multipart/form-data" style="font-weight:bold;border-style:solid;border-width:1px;border-color:grey;background-color:#eee;">


<div class="control-group">

<label class="control-label" style="margin-top:10px;font-weight:bold;" for="basicinput">Campaign name</label>

<div class="controls" style="margin-top:15px;">

<?php echo htmlentities($row['cname']);?>

</div>
</div>


<div class="control-group">
<label class="control-label" style="font-weight:bold;" for="basicinput">Organized By</label>
<div class="controls" style="margin-top:5px;">
<?php echo htmlentities($row['corg']);?>
</div>
</div>

                            <div class="control-group">
							<label class="control-label" style="font-weight:bold;" for="basicinput">Location</label>
                           <div class="controls" style="margin-top:5px;">
                                       <?php echo htmlentities($row['clocation']);?>
                                    </div>
                                </div>
                         
                       
<div class="control-group">
<label class="control-label" style="font-weight:bold;" for="basicinput">Date</label>
<div class="controls" style="margin-top:5px;">
<?php echo htmlentities($row['cdate']);?>
</div>
</div>

<div class="control-group">
<label class="control-label" style="font-weight:bold;" for="basicinput">Time</label>
<div class="controls" style="margin-top:5px;">
<?php echo htmlentities($row['ctime']);?>
</div>
</div>


<div class="control-group">
<label class="control-label" style="font-weight:bold;" for="basicinput">Description</label>
<div class="controls" style="margin-top:5px;">
<?php echo htmlentities($row['cdescription']);?>
</div>
</div>

	
									</form>
									<div style="background-color:#eee;color:#eee;">
								    a
									<br>
									a
									</div>
<?php $cnt=$cnt+1; } ?>
								

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