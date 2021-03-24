<!DOCTYPE html>
<html lang="en">
<?php
session_start();
error_reporting(0);
include('include/config.php');
// Code for User login
if(isset($_POST['login']))
{
   $email=$_POST['email'];
   $password=$_POST['password'];
$query=mysqli_query($con,"SELECT * FROM members_info WHERE emailaddress='$email' and usertype='Member' and  password='$password'");
$num=mysqli_fetch_array($query);

if($num>0)
{
$_SESSION['user_login']= 1;
$_SESSION['ul']= 1;
$_SESSION['email']=$_POST['email'];
$_SESSION['login']=$_POST['email'];
$_SESSION['phonenumber']=$num['primarycontactnumber'];
$_SESSION['username']=$num['fullname'];
$_SESSION['nic']=$num['nicnumber'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
date_default_timezone_set('Asia/Kolkata');
$ldate=date( 'd-m-Y h:i:s A', time () );
$log=mysqli_query($con,"insert into userlogs(userEmail,userip,status,logintime,logouttime) values('$email','$uip','$status','$ldate','$ldate')");

if(!$log)
{
	echo("Error description: " . mysqli_error($con));
	
}

header("location:users-dashboard.php");
exit();
}
else
{
	echo "<script>alert('Invaild username or password');</script>";
	
}
}

?>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>user | login</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">LOGIN</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
						<div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email" required>
                                </div>
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="password" required>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <input class="btn btn--radius-2 btn--red" type="submit" name="login" value="LOGIN">
						</div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->