<!DOCTYPE html>
<html lang="en">
<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['user_login'])==0)
	{	
header('location:users-login.php');
}
else{

// Code user Registration
if(isset($_POST['submit'])){
	
	$nicnumber=$_POST['nicnumber'];
	$weight=$_POST['weight'];
	$subject=$_POST['subject'];
	$haemoglobinlevel=$_POST['haemoglobinlevel'];
	$diabeticsmedicine=$_POST['diabeticsmedicine'];
	$pressurecontrol=$_POST['pressurecontrol'];
	$cancer=$_POST['cancer'];
	$thyroid=$_POST['thyroid'];
	$aids=$_POST['aids'];
	$homosexual=$_POST['homosexual'];
	$tattoo=$_POST['tattoo'];

$query=mysqli_query($con,"insert into medical_info(nicnumber,weight,bloodtype,haemoglobinlevel,diabeticsmedicine,pressurecontrol,
cancer,thyroid,aids,homosexual,tattoo) values ('$nicnumber',$weight,
'$subject','$haemoglobinlevel','$diabeticsmedicine','$pressurecontrol','$cancer','$thyroid','$aids','$homosexual','$tattoo')");

if($query)
{
	
	header("location:users-login.php");
}
else{
echo $nicnumber;
echo $weight;
echo $subject;
echo $haemoglobinlevel;
echo $diabeticsmedicine;
echo $pressurecontrol;
echo $cancer;
echo $thyroid;
echo $aids;
echo $homosexual;
echo $tattoo;

echo("Error description: " . mysqli_error($con));

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
    <title>User | Medical</title>

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
                    <h2 class="title">Medical Infomation</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="">
						<div class="form-row">
                            <div class="name">NIC Number</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="nicnumber" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Weight</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" name="weight" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Blood Type</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="subject" required>
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option>A+</option>
                                            <option>A-</option>
                                            <option>B+</option>
											<option>B-</option>
											<option>AB+</option>
											<option>AB-</option>
											<option>O+</option>
											<option>O-</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row p-t-20">
                            <label class="label label--block">Haemoglobin Level</label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Yes
                                    <input type="radio" id = "yes" value="Yes" checked="checked" name="haemoglobinlevel" required>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" id = "no" value="No" name="haemoglobinlevel" required >
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
						<div class="form-row p-t-20">
                            <label class="label label--block">Diabetics Take Medicine Regularly </label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Yes
                                    <input type="radio" id = "yes" value="Yes" checked="checked" name="diabeticsmedicine" required>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" id = "no" value="No" name="diabeticsmedicine" required>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
						<div class="form-row p-t-20">
                            <label class="label label--block">Blood Pressure Level Control </label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Yes
                                    <input type="radio" id = "yes" value="Yes" checked="checked" name="pressurecontrol" required>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" id = "no" value="No" name="pressurecontrol" required>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
						<div class="form-row p-t-20">
                            <label class="label label--block">Did you Affected by Cancer </label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Yes
                                    <input type="radio" id = "yes" value="Yes" checked="checked" name="cancer" required>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" id = "no" value="No" name="cancer" required>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
						<div class="form-row p-t-20">
                            <label class="label label--block">Do you have Thyroid Problem  </label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Yes
                                    <input type="radio" id = "yes" value="Yes" checked="checked" name="thyroid" required>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" id = "no" value="No" name="thyroid" required>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
						<div class="form-row p-t-20">
                            <label class="label label--block">Did you Affected by AIDS </label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Yes
                                    <input type="radio" id = "yes" value="Yes" checked="checked" name="aids" required>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" id = "no" value="No" name="aids" required>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
						<div class="form-row p-t-20">
                            <label class="label label--block">Are you Homosexual or not </label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Yes
                                    <input type="radio" id = "yes" value="Yes" checked="checked" name="homosexual" required>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" id = "no" value="No" name="homosexual" required>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
						<div class="form-row p-t-20">
                            <label class="label label--block">Are you Tattooed ?</label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Yes
                                    <input type="radio" id = "yes" value="Yes" checked="checked" name="tattoo" required>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" id = "no" value="No" name="tattoo" required>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <input class="btn btn--radius-2 btn--red" type="submit" name= "submit">
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

</body>

</html>
<!-- end document-->
<?php }?>