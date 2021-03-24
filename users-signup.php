<!DOCTYPE html>
<html lang="en">
<?php
session_start();
error_reporting(0);
include('include/config.php');
// Code user Registration
if(isset($_POST['submit']))
{
	
$target_dir = "images/";
$img="images/";
$target_file = $target_dir.rand(100,999). basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) 
	{
        echo "";
        $uploadOk = 1;
    } 
	else 
	{
      //  echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) 
{
   // echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000000) 
{
   // echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) 
{
   // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) 
{
   // echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} 
else
{
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
	{
        $img=$target_file;
    } else 
	{
     //   echo "Sorry, there was an error uploading your file.";
    }
}
	
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$fullname = $first_name." ".$last_name;
	$nicnumber=$_POST['nicnumber'];
	$dob=$_POST['dob'];
	$email=$_POST['email'];
	$age=$_POST['age'];
	$province=$_POST['province'];
	$distric=$_POST['distric'];
	$city=$_POST['city'];
	$area=$_POST['area'];
	$address=$_POST['address'];
	$primaryphone=$_POST['primaryphone'];
	$secondaryphone=$_POST['secondaryphone'];
	$gender=$_POST['gender'];
	$bloodtype=$_POST['bloodtype'];
	$password=$_POST['password'];
	$password_confirm=$_POST['password_confirm'];
	
  	
$query=mysqli_query($con,"insert into members_info(fullname,usertype,nicnumber,dob,gender,age,
province,district,city,area,address,primarycontactnumber,secondarycontactnumber,emailaddress,bloodtype,password,Upload_Image) 
values ('$fullname','Member','$nicnumber',
'$dob','$gender','$age','$province','$distric','$city','$area','$address','$primaryphone','$secondaryphone','$email','$bloodtype','$password','$img')");

if($query)
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
if(!$log){
	echo("Error description: " . mysqli_error($con));
	
}
	header("location:users-medicals-form.php");
}
else{
echo $fullname;
echo $nicnumber;
echo $email;
echo $dob;
echo $age;
echo $province;
echo $distric;
echo $city;
echo $address;
echo $primaryphone;
echo $secondaryphone;
echo $gender;
echo $password;

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
    <title>user | Registration</title>

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

<body style="background-image:url(images/6.jpg);background-size:cover;">

    <div class="page-wrapper p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title" style="background-color:#6b0d0d;border-radius:0px;color:white;">Member Registration Form</h2>
                </div>
				
                <div class="card-body" style="background-color:white;">
				
                    <form method="POST" onSubmit="return nicvalid();">
					
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="first_name" required>
                                            <label class="label--desc">first name</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="last_name" required>
                                            <label class="label--desc">last name</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">NIC Number</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="nicnumber" required>
                                </div>
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">Date Of Birth</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="date" name="dob" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email" required>
                                </div>
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">Age</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" name="age" required>
                                </div>
                            </div>
                        </div>
						
						<div class="form-row">
                            <div class="name">Province</div>
                            <div class="value">
                                <div class="input-group">
									<div class="rs-select2 js-select-simple select--no-search">
										<select name="province">
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
										<div class="select-dropdown"></div>
										</div>
                                </div>
                            </div>
                        </div>
						
						<div class="form-row">
                            <div class="name">Distric</div>
                            <div class="value">
                               <div class="input-group">
									<div class="rs-select2 js-select-simple select--no-search">
										<select name="distric">
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
											<option value="vavuniya">Vavuniya</option>
                                        </select>
										<div class="select-dropdown"></div>
										</div>
                                </div>
                            </div>
                        </div>
						
						<div class="form-row">
                            <div class="name">City</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="city" required>
                                </div>
                            </div>
                        </div>
						
						<div class="form-row">
                            <div class="name">Area</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="area" required>
                                </div>
                            </div>
                        </div>
						
						<div class="form-row">
                            <div class="name">Address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="address" required>
                                </div>
                            </div>
                        </div>
						
						<div class="form-row">
                            <div class="name">Primary Phone</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="primaryphone" required>
                                </div>
                            </div>
                        </div>
						
						<div class="form-row">
                            <div class="name">Secondary Phone</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="secondaryphone" required>
                                </div>
                            </div>
                        </div>

						<div class="form-row">
                            <div class="name">Gender</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Custom</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						<div class="form-row">
                            <div class="name">Blood Group</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="bloodtype">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
											<option value="B-">B-</option>
											<option value="AB+" >AB+</option>
											<option value="AB-">AB-</option>
											<option value="O+">O+</option>
											<option value="O-" >O-</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						<div class="form-row">
                            <div class="name">Upload Image</div>
                            <div class="value">
                                <div class="input-group">
									<input type="file" class="input--style-5"  name="fileToUpload">
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
						<div class="form-row">
                            <div class="name">Confirm Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="password" required>
                                </div>
                            </div>
                        </div>
                        <div>
                            <input name="submit" style="background-color:#6b0d0d;border-radius:50px;" class="btn" type="submit" value="Signup">
							<br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
	
	<script>
	
	function nicvalid()
	{
		
	}
	
	</script>

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