<?php
session_start();
include("include/config.php");
//$_SESSION['login']=="";
date_default_timezone_set('Asia/Kolkata');
$ldate=date( 'd-m-Y h:i:s A', time () );
echo "You suceesfully logout !".$ldate;
$log = mysqli_query($con,"UPDATE userlogs  SET logouttime = '$ldate' WHERE userEmail = '".$_SESSION['login']."' ORDER BY id DESC LIMIT 1");
if(!$log){
	echo("Error description: " . mysqli_error($con));
}
session_unset();
$_SESSION['errmsg']="You have successfully logout";
?>
<script language="javascript">
document.location="index.php";
</script>


