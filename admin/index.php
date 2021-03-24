<!DOCTYPE html>
<html lang="en">
<?php
session_start();
error_reporting(0);
include('include/config.php');
// Code for User login
if(isset($_POST['login'])){
   $email=$_POST['username'];
   $password=$_POST['password'];
$query=mysqli_query($con,"SELECT * FROM members_info WHERE emailaddress='$email' and usertype='Admin' and password='$password'");
$num=mysqli_fetch_array($query);

if($num>0){
$_SESSION['admin_login']= 1;
$_SESSION['login']=$_POST['email'];
$_SESSION['admin_nic']=$num['nicnumber'];
$_SESSION['phonenumber']=$num['primarycontactnumber'];
$_SESSION['admin_username']=$num['fullname'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
date_default_timezone_set('Asia/Kolkata');
$ldate=date( 'd-m-Y h:i:s A', time () );
$log=mysqli_query($con,"insert into userlogs(userEmail,userip,status,logintime,logouttime) values('$email','$uip','$status','$ldate','$ldate')");
if(!$log){
	echo("Error description: " . mysqli_error($con));
	
}

header("location:admin-manage-users.php");
exit();
}
else{
	echo "<script>alert('Invaild username or password');</script>";
	
}
}

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Login </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="assets-admin/css/style.css">
</head>

<body>

    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
			
                <div class="signin-content">
				
                    <div class="signin-image" style="border-radius:0px;width:400px;height:500px">
                        <figure><img src="assets-admin/images/1.jpg" alt="sing up image" ></figure>
                        <a href="../" class="signup-image-link" style="color:green;font-weight:bold;text-decoration:none;">Back To Portal</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title" style="color:red;">Admin Panel</h2>
                        <form method="POST" class="register-form" id="login-form" action="">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="your_name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term" style="color:green;font-weight:bold;"><span><span></span></span>Remember Me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" style="background-color:red;border-radius:50px;" name="login" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label" style="color:green;font-weight:bold;">Or Login With</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="assets-adminvendor/jquery/jquery.min.js"></script>
    <script src="assets-adminjs/main.js"></script>
</body>
</html>